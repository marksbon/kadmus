<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller 
{
	/************************************** Interfaces ********************************/
  	/*******************************
             Constructor
    *******************************/
    public function index() 
  	{
  		redirect('Access/Login');
  	}

    /*******************************
        Login Page - Normal User
    *******************************/
    public function Login() 
    {
      if( isset($_SESSION['username']) )
      {
        if( isset($_SESSION['rows_exploded']) )
          redirect('Dashboard');
        else
        {
          session_destroy();
          redirect('Access/Login');
        }
      }
      else 
      {
        # Load Login View
        $title['title'] = "Login";
        $this->load->view('access/login',$title);
      }
    }

    /*******************************
        Login Page - System User
    *******************************/
    public function Reserved() 
    {
      if( isset($_SESSION['username']) )
      {
        if( isset($_SESSION['rows_exploded']) )
          redirect('Dashboard/Reserved');
        else
        {
          session_destroy();
          redirect('Access/Reserved');
        }
      }
      else 
      {
        # Load Login View
        $title['title'] = "System Login";
        $this->load->view('reserved/login',$title);
      }
    }

    /*******************************
           Lock Screen
    *******************************/
    public function Lockscreen() 
    {
      if ( isset($_SESSION['rows_exploded']) ) 
      {
        # Freezing Session
        $_SESSION['login_state'] = "Freezed";
        
        $headertag['title'] = "LockScreen";
        $this->load->view('lockscreen',$headertag);
      } 
      else 
      {
        # Not Logged In
        redirect('Access');
      }
    }

  /************************************** Interfaces ********************************/


  /************************************** Other Func ********************************/
    /*******************************
           Logout
    *******************************/
    public function logout() 
    {   
      if( isset($_SESSION['username']) && isset($_SESSION['LoginID']) ) 
      {
        $this->load->model('Model_Access');

        $result = $this->Model_Access->logout_log($_SESSION['LoginID']);
        
        if( $result ) 
        {
          session_destroy();
          redirect('Access');
        } 
        
        else 
        {
          $this->session->set_flashdata('error',"Log Out Failed");
          redirect('Dashboard');
        }
      }
    }

  	/***********************************************
  		Password Encyption and Verifying functions
  	************************************************/
  	public function encrypt_password($password) 
    {
  		# Password encryption
  		$encrypted_passwd = password_hash($password,PASSWORD_BCRYPT);
  			
  		return ($encrypted_passwd);
  	}
	
  	public function verify_password($password,$encrypted_password) 
    {
  		# Replacing double quotes of hash to single
  		$encrypted_password = str_replace('"',"''",$encrypted_password);
  		
  		# password verfication and returning to function
  		return((password_verify($password,$encrypted_password)) ? true : false);
  	}
    
    /***********************************************
		  Password Verification From LockScreen
    ************************************************/
    public function Password_Verify() 
    {
		  if(isset($_POST['passwd_verify'])) 
      {
    		# Loading Model
        $this->load->model('UserModel');
        
        # Validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('passwd', 'Password', 'required|trim');
        
        # Assignment
        $username = $this->input->post('username');
        $password = $this->input->post('passwd');
        
        # Password encryption
    		$encrypted_passwd = password_hash($password,PASSWORD_BCRYPT);
            
        $data = $this->UserModel->dblookup($username);
        
        if($data) 
        {
          # Performing Password Verfication 
          if($this->verify_password($password, $data['encrypted_password'])) 
          {
            # Unlock System
            $_SESSION['login_state'] = "Continue";
            redirect('Dashboard');
          }
          else 
          {
            $_SESSION['error'] = "Incorrect Password.";
            redirect('Access/Lockscreen');
          }
        }
      }
    }

  	/***********************************************
  		          Login Validation 
  	************************************************/
  	public function Login_Validation() 
    {
	    # Login Button Clicked
      if(isset($_POST['login'])) 
      {
        # Validation Rules
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('passwd', 'Password', 'required|trim');

        # Validation Test Fail
        if($this->form_validation->run() === FALSE) 
        {
          $this->session->set_flashdata('error','All Fields Required');
          $this->login();
        }
 	      else 
        {
				  # Loading Models
	        $this->load->model('Model_Access');
          $this->load->model('Model_HR');
          $this->load->model('Universal_Retrieval');
          $this->load->model('Universal_Update'); 

          # Performing Database Verfication ==> Username
          $username = $this->input->post('username',TRUE);
          $password = $this->input->post('passwd',TRUE);
                
				  $data = $this->Model_Access->verify_username('access_users',$username,'client');

          if(!empty($data))
          {
            # Perform Password Check
            if($this->verify_password($password, $data['encrypted_password'])) 
            { 
              # Verify Account Status and Login Attempts
              if($data['account_active'] == 1 && $data['login_attempt'] > 0) 
              {
                /************************ Retrieving Company Info ********************/
                  $companyinfo = $this->Universal_Retrieval->All_Info_Row('hr_companyinfo'); 
                    
                  if(!empty($companyinfo)) 
                  {
                    # Storing in Memory
                    $session_array = 
                    [  
                      'company_name'     => $companyinfo->name,
                      'company_tel'      => $companyinfo->tel_1,
                      'company_alttel'  => $companyinfo->tel_2,
                      'company_fax'      => $companyinfo->fax,
                      'company_email'    => $companyinfo->email,
                      'company_address'  => $companyinfo->address
                    ];
                  }
                  # No Company Info Retrieved So Assign To Show New Company.
                  else
                    $session_array = [ 'companyname' => "Unregisted"] ;
                /************************ End of Company Info ********************/

                /************************ User Roles & Priviledges ********************/
                  $roles_priv = $this->Model_Access->roles_priviledges_user('access_roles_priviledges_user',$data['employee_id']);
            
                  if(!empty($roles_priv)) 
                  {
                    $roles_unexploded = $roles_priv->roles;
                    
                    $priv_unexploded  = $roles_priv->priviledges;

                    $group_id         = $roles_priv->group_id;

                    if(empty($group_id) && empty($priv_unexploded) && empty($roles_unexploded))
                    {
                      $this->session->set_flashdata('error','No Permissions Set For User. Contact Administrator');
                      redirect('Access/Login');
                    }

                    if(!empty($group_id))
                    {
                      $roles_priv_retrieve = $this->Model_Access->roles_priviledges_group('access_roles_priviledges_group',$group_id);

                      if(!empty($roles_priv_retrieve))
                      {
                        $temp_array['rows_unexploded'] = $roles_priv_retrieve->roles;
                        $temp_array['priv_unexploded'] = $roles_priv_retrieve->priviledges;

                        $session_array['rows_exploded'] = explode("|", $temp_array['rows_unexploded']);
                        $session_array['priv_exploded'] = explode("|", $temp_array['priv_unexploded']);
                      }
                    }

                    if(!empty($roles_unexploded) || !empty($priv_unexploded))
                    {
                      $temp_array['rows_unexploded'] .= $roles_unexploded;
                      $temp_array['priv_unexploded'] .= $priv_unexploded;

                      $session_array['rows_exploded'] = explode("|", $temp_array['rows_unexploded']);
                      $session_array['priv_exploded'] = explode("|", $temp_array['priv_unexploded']);
                    }

                  }
                  
                  else
                  {
                    $this->session->set_flashdata('error','No Permissions Set For User. Contact Administrator');
                    redirect('Access/Login');
                  }
                /************************ End User Roles & Priviledges ****************/

                /************************ Employee's Personal Info  ********************/
                  $employee_data = $this->Model_HR->employee_personal_data($data['employee_id']);
                  
                  if (!empty($employee_data)) 
                  {
                    #Storing in Session
                    $session_array [ 'employee_personal_data' ]  = $employee_data;
                    $session_array [ 'fullname' ]                = $employee_data->LastName." ".$employee_data->FirstName;
                    $session_array [ 'employee_id' ]             = $employee_data->EmployeeID;
                    $session_array [ 'username']                 = $username;
                  }
                  else
                    $this->session->set_flashdata('error',"Employee Personal Data Loading Failed<br>");
                /************************ Employee's Personal Info  ********************/

                /************************ Employee's Work Info *************************/
                  $employee_data = $this->Model_HR->employee_work_data($data['employee_id']);
                  
                  if (!empty($employee_data)) 
                    $session_array [ 'employee_work_data' ]      = $employee_data;
                  
                  else
                    $this->session->set_flashdata('error',"Employee Work Data Loading Failed<br>");
                /************************ Employee's Work Info *************************/

                /************************ Recording Login Success **********************/
                  $client_ip = $this->get_ip_address();

                  $ipAPI_result = file_get_contents("http://ip-api.com/json/$client_ip");

                  $Ip_Info = json_decode($ipAPI_result);

                  $login_data = 
                  [
                    'employee_id' => $data['employee_id'],
                    'ipaddress'   => $client_ip,
                    'hostname'    => gethostbyaddr($client_ip),
                    'city_region' => $Ip_Info->city.",".$Ip_Info->regionName,
                    'country'     => $Ip_Info->country
                  ];
                  
                  $result = $this->Model_Access->login_record($login_data);
                  
                  if($result) 
                  {
                    $session_array [ 'LoginID' ]      = $result;

                    $this->session->set_userdata($session_array);
                    //print_r($session_array);
                    redirect('Dashboard');
                  }
                  
                  else
                    $this->session->set_flashdata('error',"Employee Work Data Loading Failed<br>");
                /************************ Recording Login Success **********************/
              }
              
              elseif($data['account_active'] != 1)
              {
                $this->session->set_flashdata('error',"Account Deactivated. Please Contact Administrator");
                redirect('Access/Login');
              }

              elseif($data['login_attempt'] <= 0)
              {
                $this->session->set_flashdata('error',"LogIn Attempts Exceeded. Please Contact Administrator");
                redirect('Access/Login');
              }	
            }
            # End of Form Validation Successful	

            # Password Verfication ....... Failed
            else 
            {
              if($data['login_attempt'] > 0)
              {
                $attempt =  $this->Model_Access->decrease_login_attempt($username);

                # Deactivate Account
                if( $attempt == 0 ) 
                {
                  $deactivate_res   = $this->Model_Access->deactivate_account($username,0);
                      
                  if( $deactivate_res )
                    $this->session->set_flashdata('error', "LogIn Attempts Exceeded. Account Deactivated. Please Contact Administrator");
                }
                else
                  $this->session->set_flashdata('attemptleft',$attempt);
              }
              #If Password Failed and Login Attempt = 0
              else
                $this->session->set_flashdata('attemptleft', 0);
              #######################################
              $client_ip = $this->get_ip_address();

              $ipAPI_result = file_get_contents("http://ip-api.com/json/$client_ip");

              $Ip_Info = json_decode($ipAPI_result);

              $login_fail_data = [

                'fake_username' => $username,
                'ipaddress'     => $client_ip,
                'hostname'      => gethostbyaddr($client_ip),
                'city_region'   => $Ip_Info->city.",".$Ip_Info->regionName,
                'country'       => $Ip_Info->country
              ];
              
              $this->Model_Access->fakelogin_log($login_fail_data);
              #######################################    
              redirect('Access/Login');
            }
            # Password Verfication ....... Failed			
          }
          #If Button Not Clicked
          else 
          {
            $this->session->set_flashdata('error','Invalid Username/Password Combination');
            redirect('Access/Login');
          }
        }
      }
    }					
    #End of Function

    /***********************************************
                Login Validation 
    ************************************************/
    public function SysLogin_Validation() 
    {
      # Login Button Clicked
      if(isset($_POST['loginbtn'])) 
      {
        # Validation Rules
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('passwd', 'Password', 'required|trim');
        $this->form_validation->set_rules('secretcode', 'Secret Code', 'required|trim');

        # Validation Test Fail
        if($this->form_validation->run() === FALSE) 
        {
          $this->session->set_flashdata('error','All Fields Required');
          $this->login();
        }
        else 
        {
          # Loading Models
          $this->load->model('Model_Access');
          $this->load->model('Model_HR');
          $this->load->model('Universal_Retrieval');
          $this->load->model('Universal_Update'); 

          # Performing Database Verfication ==> Username
          $username = $this->input->post('username',TRUE);
          $password = $this->input->post('passwd',TRUE);
          $secretcode = $this->input->post('secretcode',TRUE);
                
          $data = $this->Model_Access->verify_username('access_sys_users',$username,'sysadmin');

          if(!empty($data))
          {
            # Perform Password Check
            if($this->verify_password($password, $data['encrypted_password']) && $this->verify_password($secretcode, $data['secret_code'])) 
            { 
              # Verify Account Status and Login Attempts
              if($data['account_active'] == 1 && $data['login_attempt'] > 0) 
              {
                /************************ Retrieving Company Info ********************/
                  $companyinfo = $this->Universal_Retrieval->All_Info_Row('hr_companyinfo'); 
                    
                  if(!empty($companyinfo)) 
                  {
                    # Storing in Memory
                    $session_array = 
                    [  
                      'company_name'     => $companyinfo->name,
                      'company_tel'      => $companyinfo->tel_1,
                      'company_alttel'  => $companyinfo->tel_2,
                      'company_fax'      => $companyinfo->fax,
                      'company_email'    => $companyinfo->email,
                      'company_address'  => $companyinfo->address
                    ];
                  }
                  # No Company Info Retrieved So Assign To Show New Company.
                  else
                    $session_array = [ 'companyname' => "Unregisted"] ;
                /************************ End of Company Info ********************/

                /************************ User Roles & Priviledges ********************/
                  $roles_priv = $this->Model_Access->roles_priviledges_user('access_roles_priviledges_user',$data['employee_id']);
            
                  if(!empty($roles_priv)) 
                  {
                    $roles_unexploded = $roles_priv->roles;
                    
                    $priv_unexploded  = $roles_priv->priviledges;

                    $group_id         = $roles_priv->group_id;

                    if(empty($group_id) && empty($priv_unexploded) && empty($roles_unexploded))
                    {
                      $this->session->set_flashdata('error','No Permissions Set For User. Contact Administrator');
                      redirect('Access/Reserved');
                    }

                    if(!empty($group_id))
                    {
                      $roles_priv_retrieve = $this->Model_Access->roles_priviledges_group('access_roles_priviledges_group',$group_id);

                      if(!empty($roles_priv_retrieve))
                      {
                        $temp_array['rows_unexploded'] = $roles_priv_retrieve->roles;
                        $temp_array['priv_unexploded'] = $roles_priv_retrieve->priviledges;

                        $session_array['rows_exploded'] = explode("|", $temp_array['rows_unexploded']);
                        $session_array['priv_exploded'] = explode("|", $temp_array['priv_unexploded']);
                      }
                    }

                    if(!empty($roles_unexploded) || !empty($priv_unexploded))
                    {
                      $temp_array['rows_unexploded'] .= $roles_unexploded;
                      $temp_array['priv_unexploded'] .= $priv_unexploded;

                      $session_array['rows_exploded'] = explode("|", $temp_array['rows_unexploded']);
                      $session_array['priv_exploded'] = explode("|", $temp_array['priv_unexploded']);
                    }

                  }
                  
                  else
                  {
                    $this->session->set_flashdata('error','No Permissions Set For User. Contact Administrator');
                    redirect('Access/Reserved');
                  }
                /************************ End User Roles & Priviledges ****************/

                /************************ Employee's Personal Info  ********************/
                  $employee_data = $this->Model_HR->employee_personal_data($data['employee_id']);
                  
                  if (!empty($employee_data)) 
                  {
                    #Storing in Session
                    $session_array [ 'employee_personal_data' ]  = $employee_data;
                    $session_array [ 'fullname' ]                = $employee_data->LastName." ".$employee_data->FirstName;
                    $session_array [ 'employee_id' ]             = $employee_data->EmployeeID;
                    $session_array [ 'username']                 = $username;
                  }
                  else
                    $this->session->set_flashdata('error',"Employee Personal Data Loading Failed<br>");
                /************************ Employee's Personal Info  ********************/

                /************************ Employee's Work Info *************************/
                  $employee_data = $this->Model_HR->employee_work_data($data['employee_id']);
                  
                  if (!empty($employee_data)) 
                    $session_array [ 'employee_work_data' ]      = $employee_data;
                  
                  else
                    $this->session->set_flashdata('error',"Employee Work Data Loading Failed<br>");
                /************************ Employee's Work Info *************************/

                /************************ Recording Login Success **********************/
                  $client_ip = $this->get_ip_address();

                  $ipAPI_result = file_get_contents("http://ip-api.com/json/$client_ip");

                  $Ip_Info = json_decode($ipAPI_result);

                  $login_data = 
                  [
                    'employee_id' => $data['employee_id'],
                    'ipaddress'   => $client_ip,
                    'hostname'    => gethostbyaddr($client_ip),
                    'city_region' => $Ip_Info->city.",".$Ip_Info->regionName,
                    'country'     => $Ip_Info->country
                  ];
                  
                  $result = $this->Model_Access->login_record($login_data);
                  
                  if($result) 
                  {
                    $session_array [ 'LoginID' ]      = $result;
                    $session_array ['usertype']       = 'sysadmin';
                    $this->session->set_userdata($session_array);
                    //print_r($session_array);
                    redirect('Dashboard');
                  }
                  
                  else
                    $this->session->set_flashdata('error',"Employee Work Data Loading Failed<br>");
                /************************ Recording Login Success **********************/
              }
              
              elseif($data['account_active'] != 1)
              {
                $this->session->set_flashdata('error',"Account Deactivated. Please Contact Administrator");
                redirect('Access/Reserved');
              }

              elseif($data['login_attempt'] <= 0)
              {
                $this->session->set_flashdata('error',"LogIn Attempts Exceeded. Please Contact Administrator");
                redirect('Access/Reserved');
              } 
            }
            # End of Form Validation Successful 

            # Password Verfication ....... Failed
            else 
            {
              if($data['login_attempt'] > 0)
              {
                $attempt =  $this->Model_Access->decrease_login_attempt($username);

                # Deactivate Account
                if( $attempt == 0 ) 
                {
                  $deactivate_res   = $this->Model_Access->deactivate_account($username,0);
                      
                  if( $deactivate_res )
                    $this->session->set_flashdata('error', "LogIn Attempts Exceeded. Account Deactivated. Please Contact Administrator");
                }
                else
                  $this->session->set_flashdata('attemptleft',$attempt);
              }
              #If Password Failed and Login Attempt = 0
              else
                $this->session->set_flashdata('attemptleft', 0);
              #######################################
              $client_ip = $this->get_ip_address();

              $ipAPI_result = file_get_contents("http://ip-api.com/json/$client_ip");

              $Ip_Info = json_decode($ipAPI_result);

              $login_fail_data = [

                'fake_username' => $username,
                'ipaddress'     => $client_ip,
                'hostname'      => gethostbyaddr($client_ip),
                'city_region'   => $Ip_Info->city.",".$Ip_Info->regionName,
                'country'       => $Ip_Info->country
              ];
              
              $this->Model_Access->fakelogin_log($login_fail_data);
              #######################################    
              redirect('Access/Reserved');
            }
            # Password Verfication ....... Failed     
          }
          #If Button Not Clicked
          else 
          {
            $this->session->set_flashdata('error','Invalid Username/Password Combination');
            redirect('Access/Reserved');
          }
        }
      }
    }
    #End of Function

  /************************************** Other Func ********************************/

	/************************************** Data Insertion ***************************/
    /***********************************************
			 New User Registration
    ************************************************/
    public function Register_User() {
		
		if( isset($_POST['Register']) && isset($_SESSION['username'])) {
			
		//Setting validation rules
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname','fullname','required|trim|xss_clean');
			$this->form_validation->set_rules('branch_id','Bank Branch','required|trim|xss_clean');
			$this->form_validation->set_rules('dept','Department','required|trim|xss_clean');
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');
			$this->form_validation->set_rules('password_repeat','Confirm Password','required|trim|xss_clean');
			$this->form_validation->set_rules('roleid','Role','required|trim|xss_clean');
			//$this->form_validation->set_rules('passwd','Password','required|trim|min_length[5]|max_length[12]|xss_clean');

			if (strcasecmp($this->input->post('password'), $this->input->post('password_repeat')) == 0 ) {
				# code...
				//Variable initializations
				$data['fullName']	 	= $this->input->post('fullname');
				$data['userName']	 	= $this->input->post('username');
				$data['passWord']	 	= $this->input->post('password');
				$data['branch_id']	 	= $this->input->post('branch_id');
				$data['department']	 	= $this->input->post('dept');
				$data['roleId']	 		= $this->input->post('roleid');
				$data['userCreatedBy']	= $_SESSION['fullname'];
				$data['dateCreated']	= gmdate('Y-m-d H:i:s');
				$data['state']	 		= "Active";

				//loading model
				$this->load->model('UserModel');

				//Encrypting password
				$data['passWord'] = $this->encrypt_password($data['passWord']);
			
				//loading model register
				$result = $this->UserModel->register_user($data);

				//Registering User
				if($result) {

					$_SESSION['success'] = "User Registration Successful";
					redirect('Dashboard/User_Registration');
				}
					
				else {
						
					$_SESSION['error'] = "Employee Registering Failed";
					redirect('Dashboard/User_Registration');
				}
			} else {
				# code...
				$_SESSION['error'] = "Passwords Do Not Match";
				redirect('Dashboard/User_Registration');
			}
			

		
		}
		
		else {
				$_SESSION['error'] = "Register User Command Failed";
				redirect('Dashboard/User_Registration');
			}
			
	}

	/***********************************************
			 Update Employee Info 
	************************************************/
    
    public function Update_User() {
		
		if( isset($_POST['Register']) && isset($_SESSION['username'])) {
			
		//Setting validation rules
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname','fullname','required|trim|xss_clean');
			$this->form_validation->set_rules('branch_id','Bank Branch','required|trim|xss_clean');
			$this->form_validation->set_rules('dept','Department','required|trim|xss_clean');
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');
			$this->form_validation->set_rules('password_repeat','Confirm Password','required|trim|xss_clean');
			$this->form_validation->set_rules('roleid','Role','required|trim|xss_clean');
			$this->form_validation->set_rules('userId','Role','required|trim|xss_clean');

			if (strcasecmp($this->input->post('password'), $this->input->post('password_repeat')) == 0 ) {
				# code...
				//Variable initializations
				$data['fullName']	 	= $this->input->post('fullname');
				$data['userName']	 	= $this->input->post('username');
				$data['passWord']	 	= $this->input->post('password');
				$data['branch_id']	 	= $this->input->post('branch_id');
				$data['department']	 	= $this->input->post('dept');
				$data['roleId']	 		= $this->input->post('roleid');
				$data['userId']			= $this->input->post('userId');

				//loading model
				$this->load->model('UserModel');

				$result = $this->UserModel->user_passwd($data['userId']);

				foreach ($result as $ue) {
					# code...
					$dbpasswd = $ue->passWord;
				}

				if (strcasecmp($dbpasswd, $data['passWord']) == 0) {
					# code...
					$data['passWord'] = $dbpasswd;
				}

				else
					//Encrypting password
					$data['passWord'] = $this->encrypt_password($data['passWord']);
			
				//loading model register
				$result = $this->UserModel->update_user($data);

				//Registering User
				if($result) {

					$_SESSION['success'] = "User Info Update Successful";
					redirect('Dashboard/User_Management');
				}
					
				else {
						
					$_SESSION['error'] = "User Info Update Failed";
					redirect('Dashboard/User_Management');
				}
			} else {
				# code...
				$_SESSION['error'] = "Passwords Do Not Match";
				redirect('Dashboard/User_Management');
			}
			

		
		}
		
		else {
				$_SESSION['error'] = "User Update Command Failed";
				redirect('Dashboard/User_Management');
			}
			
	}

	/***********************************************
            Delete User
	************************************************/

	public function Delete_User() {

		if( isset($_POST['delete_user']) && isset($_SESSION['username'])) {

			$userId = $this->input->post('userId');
			
			//loading model
			$this->load->model('UserModel');
			$result = $this->UserModel->delete_user($userId);

			if ($result) {
				# code...
				$_SESSION['success'] = "User Deletion Successful";
				redirect('Dashboard/User_Management');

			}	else {
				# code...
				$_SESSION['error'] = "User Deletion Failed";
				redirect('Dashboard/User_Management');
			}
		}	else {
				$_SESSION['error'] = "Delete User Command Failed";
				redirect('Dashboard/User_Management');
		}     
	}

	/***********************************************
            Update User PAssword
	************************************************/

	public function Update_Password() {
		
		if(isset($_POST['Update_Pwd']) && isset($_SESSION['username']) ) {
			
			//Setting validation rules
			$this->load->library('form_validation');
			$this->form_validation->set_rules('CurrentPwd','Current Password','required|trim|xss_clean');
			$this->form_validation->set_rules('password','New Password','required|trim|xss_clean');
			$this->form_validation->set_rules('confirm_password','Confirm Password','required|trim|xss_clean');
			
			$currentpwd 	= $this->input->post('CurrentPwd');
			$newpwd 		= $this->input->post('password');
			$confirmpwd 	= $this->input->post('confirm_password');
			$userId 		= $this->input->post('userid');

			if (strcasecmp($newpwd, $confirmpwd) == 0 ) {
				
				//loading model / username lookup
	        	$this->load->model('UserModel');
				$data = $this->UserModel->dblookup($_SESSION['username']);

				if ($this->verify_password($currentpwd, $data['encrypted_password'])) {
					
					//Encrypting New password
					$newpwd_encrypted = $this->encrypt_password($newpwd);

					//Update passwd in users
					$result = $this->UserModel->changepwd($newpwd_encrypted,$userId);
					
					if ($result) {
						# code...
						$_SESSION['success'] = "Password Changed";
						redirect('Dashboard');
					
					} else {
						$_SESSION['error'] = "Password Changing Failed";
						redirect('Dashboard');
					}
				
				} else {
					$_SESSION['error'] = "Invalid Current Password";
					redirect('Dashboard');
				}

			} else {
				$_SESSION['error'] = "Password Does not Match";
				redirect('Dashboard');
			}
		}
		else {
				$_SESSION['error'] = "Change Password Command Failed";
				redirect('Dashboard');
			}
	}
        
	/*********************************** Other Functions ****************************************/
    /**
    * Retrieves the best guess of the client's actual IP address.
    * Takes into account numerous HTTP proxy headers due to variations
    * in how different ISPs handle IP addresses in headers between hops.
    */
    public function get_ip_address() 
    {
      // check for shared internet/ISP IP
      if (!empty($_SERVER['HTTP_CLIENT_IP']) && $this->validate_ip($_SERVER['HTTP_CLIENT_IP'])) 
      {
        return $_SERVER['HTTP_CLIENT_IP'];
      }
      // check for IPs passing through proxies
      if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
      {
        // check if multiple ips exist in var
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false) {
          $iplist = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
          foreach ($iplist as $ip) {
            if ($this->validate_ip($ip))
              return $ip;
          }
        } else {
          if ($this->validate_ip($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
      }
      if (!empty($_SERVER['HTTP_X_FORWARDED']) && $this->validate_ip($_SERVER['HTTP_X_FORWARDED']))
        return $_SERVER['HTTP_X_FORWARDED'];
      if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && $this->validate_ip($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
      if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && $this->validate_ip($_SERVER['HTTP_FORWARDED_FOR']))
        return $_SERVER['HTTP_FORWARDED_FOR'];
      if (!empty($_SERVER['HTTP_FORWARDED']) && $this->validate_ip($_SERVER['HTTP_FORWARDED']))
        return $_SERVER['HTTP_FORWARDED'];
      // return unreliable ip since all else failed
      return $_SERVER['REMOTE_ADDR'];
    }

    /**
     * Ensures an ip address is both a valid IP and does not fall within
     * a private network range.
     */
    public function validate_ip($ip) 
    {
      if (strtolower($ip) === 'unknown')
        return false;
      // generate ipv4 network address
      $ip = ip2long($ip);
      // if the ip is set and not equivalent to 255.255.255.255
      if ($ip !== false && $ip !== -1) {
        // make sure to get unsigned long representation of ip
        // due to discrepancies between 32 and 64 bit OSes and
        // signed numbers (ints default to signed in PHP)
        $ip = sprintf('%u', $ip);
        // do private network range checking
        if ($ip >= 0 && $ip <= 50331647) return false;
        if ($ip >= 167772160 && $ip <= 184549375) return false;
        if ($ip >= 2130706432 && $ip <= 2147483647) return false;
        if ($ip >= 2851995648 && $ip <= 2852061183) return false;
        if ($ip >= 2886729728 && $ip <= 2887778303) return false;
        if ($ip >= 3221225984 && $ip <= 3221226239) return false;
        if ($ip >= 3232235520 && $ip <= 3232301055) return false;
        if ($ip >= 4294967040) return false;
      }
      return true;
    }

  /*********************************** Other Functions ****************************************/
	
}//End of Class
