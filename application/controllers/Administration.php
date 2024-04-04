<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller 
{
	/************************************ Constructor / Logout ******************************/
		/*******************************
  		    Administration Index 
  	*******************************/
  	public function index() 
    {
  		# Permission Check
      if ( isset($_SESSION['username']) )
      {
        if( isset($_SESSION['rows_exploded']) ) 
        {
        	redirect('Administration/Users');
        }
        else
        {
          redirect('Dashboard');
        }
      }
      else
      {
        redirect('Access');
      }
  	}
  /************************************ Constructor / Logout ******************************/

	/***************************************	Interfaces 	***********************************/
		/******************************
				 New User
		*******************************/
		public function Users() 
		{
      if ( isset($_SESSION['username']) )
			{
				if( in_array('Users',$_SESSION['rows_exploded']) ) 
				{
					# Loading models
          $this->load->model('Model_Access');/*Needed By header, nav*/
          $this->load->model('Universal_Retrieval');
          $this->load->model('Model_HR');

          $this->load->library('encryption');
          
          #Extracting Data For Display
          $data['allusers']  = $this->Universal_Retrieval->All_Info('access_user_details');
          $data['allgroups'] = $this->Universal_Retrieval->All_Info('access_roles_priviledges_group');
          $data['dash_tabs'] = $this->Model_Access->dashboard_tabs();

					/********** Generating New User Id ************/
          $last_employee_id  = $this->Model_HR->ret_last_employee_id();

          $data['id'] = $last_employee_id->id;
          
          if( !empty($last_employee_id) )
          {
            if($last_employee_id->employee_id == NULL || $last_employee_id->employee_id == 0) 
              $data['next_usr_id'] = "KAD/TEMP/001";
            
            elseif( strlen($last_employee_id->employee_id) == 1 )
              $data['next_usr_id'] = "KAD/TEMP/00".($last_employee_id->employee_id + 1);

            elseif( strlen($last_employee_id->employee_id) == 2 )
              $data['next_usr_id'] = "KAD/TEMP/0".($last_employee_id->employee_id + 1);

            elseif( strlen($last_employee_id->employee_id) == 3 )
              $data['next_usr_id'] = "KAD/TEMP/".($last_employee_id->employee_id + 1);
          }
          else
          {
            $this->session->set_flashdata('error',"Error In Retrieving Last Employee ID");
            $data['next_usr_id'] = "ERROR";
          }  
          /********** Generating New User Id ************/

					/********** Interface ***********************/    
          $headertag['title'] = "Users";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('access/users',$data);
          $this->load->view('footer');
          /********** Interface ***********************/
				}
		 		else 
		 		{
					$this->session->set_flashdata('error', "Permission Denied. Contact Administrator");
					redirect('Dashboard');
				}
			}
			else
			{
				redirect('Access');
			}
		}
    
    /******************************
			Roles & Priviledges
		******************************/
		public function Roles_Priviledges() 
		{
			if (isset($_SESSION['username']))
      {
        if(in_array('Roles & Priv.',$_SESSION['rows_exploded'])) 
        {
  				# Loading models
          $this->load->model('Model_Access');/*Needed By header, nav*/
          $this->load->model('Universal_Retrieval');
          $this->load->model('Model_HR');
            
          #Extracting Data For Display
          $data['allusers']  = $this->Universal_Retrieval->All_Info('access_user_details');
          $data['allgroups'] = $this->Universal_Retrieval->All_Info('access_roles_priviledges_group');
          $data['dash_tabs'] = $this->Model_Access->dashboard_tabs();
            
          /********** Generating New User Id ************/
            $last_employee_id  = $this->Model_HR->ret_last_employee_id();

            $data['id'] = $last_employee_id->id;
            
            if( !empty($last_employee_id) )
            {
              if($last_employee_id->employee_id == NULL || $last_employee_id->employee_id == 0) 
                $data['next_usr_id'] = "KAD/TEMP/001";
              
              elseif( strlen($last_employee_id->employee_id) == 1 )
                $data['next_usr_id'] = "KAD/TEMP/00".($last_employee_id->employee_id + 1);

              elseif( strlen($last_employee_id->employee_id) == 2 )
                $data['next_usr_id'] = "KAD/TEMP/0".($last_employee_id->employee_id + 1);

              elseif( strlen($last_employee_id->employee_id) == 3 )
                $data['next_usr_id'] = "KAD/TEMP/".($last_employee_id->employee_id + 1);
            }
          /********** Generating New User Id ************/

          /********** Generating New Group Id ************/
            $last_group_id  = $this->Model_Access->ret_last_group_id();

            $data['id'] = $last_group_id->id;
            
            if( !empty($last_group_id) )
            {
              if($last_group_id->group_id == NULL || $last_employee_id->group_id == 0) 
                $data['next_grp_id'] = "KAD/TEMP/001";
              
              elseif( strlen($last_group_id->group_id) == 1 )
                $data['next_grp_id'] = "KAD/TEMP/00".($last_employee_id->group_id + 1);

              elseif( strlen($last_group_id->group_id) == 2 )
                $data['next_grp_id'] = "KAD/TEMP/0".($last_employee_id->group_id + 1);

              elseif( strlen($last_employee_id->group_id) == 3 )
                $data['next_grp_id'] = "KAD/TEMP/".($last_group_id->group_id + 1);
            }
          /********** Generating New Group Id ************/

          /********** Unsetting Session Var ************/
          unset($_SESSION['user_roles']);
          /********** Unsetting Session Var ************/
            
          /********** Interface ***********************/    
          $headertag['title'] = "Roles & Priviledges";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('administration/roles_priv',$data);
          $this->load->view('footer');
          /********** Interface ***********************/
		    }
        else
        {
          $this->session->set_flashdata('error',"Permission Denied. Contact Administrator");
          redirect('Dashboard');
        }
		  } 
      else 
      {
			 redirect('Access/Login');
		  }
    }


	public function User_Roles() {
		
		//User Roles
		if (isset($_POST['user_roles']) && in_array('Roles & Priv.',$_SESSION['rows_exploded'])) {
			# code...
			$this->form_validation->set_rules('user','User Selected','required|trim');
            $this->form_validation->set_rules('user_group','User Selected','required|trim');
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() == FALSE) {
                #Redirecting With Error
                $this->Roles_Priviledges();
            }
            # If Passed
            else {
	            #Variable Assignment
	            $_SESSION['user_roles']['employee_id'] = $this->input->post('user');
	            $_SESSION['user_roles']['group_id'] =  $this->input->post('user_group');
	            $data['roles'] = "activate";
	            # Loading model...
	            $this->load->model('SettingsModel');
	            $this->load->model('UserModel'); 
	            #Extracting Data For Display
	            $data['allusers'] = $this->SettingsModel->users();
            	$data['allgroups'] = $this->SettingsModel->groups();
            	$data['all_users_result']  = $this->UserModel->allemployees();
	            $data['dash_tabs'] = $this->SettingsModel->dashboard_tabs();
	            $data['grp_roles_result'] = $this->SettingsModel->ret_grp_roles_id($_SESSION['user_roles']['group_id']);
	            /******* Interface ******/
					$headertag['title'] = "Roles & Priviledges";
	            $this->load->view('headtag',$headertag);
                $this->load->view('header');
                $this->load->view('nav');
	            $this->load->view('roles_priv',$data);
	            $this->load->view('footer');
	            /******* Interface ******/
			}
		} else {
			# code...
			//loading login view
            $_SESSION['error'] = "Permission Denied. Contact Administrator";
			redirect('Administration/Roles_Priviledges');
		}
	}
    
	public function Group_Roles() {
		
		//User Roles
		if (isset($_POST['group_roles'])&& in_array('Roles & Priv.',$_SESSION['rows_exploded'])) {
			# code...
			$this->form_validation->set_rules('group','Group Selected','required|trim');
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() == FALSE) {
                #Redirecting With Error
                $this->Roles_Priviledges();
            }
            # If Passed
            else {
	            #Variable Assignment
                $_SESSION['user_roles']['group_id'] = $this->input->post('group');
	            $data['group_id'] = $_SESSION['user_roles']['group_id'];
	            $data['grp_to_belong'] = $_SESSION['user_roles']['group_id'];
	            $data['roles'] = "activate";
	            # Loading model...
	            $this->load->model('SettingsModel');
	            $this->load->model('UserModel'); 
	            #Extracting Data For Display
	            $data['groups'] = $this->SettingsModel->groups();
	            $data['dash_tabs'] = $this->SettingsModel->dashboard_tabs();
	            $_SESSION['grp_roles_result'] = $this->SettingsModel->ret_grp_roles_id($_SESSION['user_roles']['group_id']);
                $data['grp_roles_result'] = $_SESSION['grp_roles_result'];
                $_SESSION['grp_request'] = "group";
	            /******* Interface ******/
				$headertag['title'] = "Roles & Priviledges";
	            $this->load->view('headtag',$headertag);
                $this->load->view('header');
                $this->load->view('nav');
	            $this->load->view('roles_priv',$data);
	            $this->load->view('footer');
	            /******* Interface ******/
			}
		} else {
			# code...
			//loading login view
			redirect('Administration/Roles_Priviledges');
		}
	}

    /******************************
  			 License
  	*******************************/
  	public function License() 
    {
  		if (isset($_SESSION['username']))
      {
        if(in_array('License',$_SESSION['rows_exploded'])) 
        {
          # Loading models...
            $this->load->model('Model_Access'); /*Needed By header, nav*/
            $this->load->model('Universal_Retrieval');

          # Extracting Data For Display
            $data['license_info'] = $this->Universal_Retrieval->All_Info("companyinfo");

  		    /********** Interface ***********************/    
            $headertag['title'] = "License";
            $this->load->view('headtag',$headertag);
            $this->load->view('header');
            $this->load->view('nav');
            $this->load->view('administration/license',$data);
            $this->load->view('footer');
          /********** Interface ***********************/
  		  } 
        else 
        {
  		    $this->session->set_flashdata('error',"Permission Denied. Contact Administrator");
  		    redirect('Dashboard');
  		  }
      }
      else
      {
        redirect('Access/Login');
      }
  	}
    
    /***********************************************
  			Report
  	************************************************/
  	public function Report() 
    {
  		if (isset($_SESSION['username']))
      {
        if(in_array('Audit',$_SESSION['rows_exploded']))
        {
          # Loading models...
          $this->load->model('Model_Access'); /*Needed By header, nav*/
          $this->load->model('Universal_Retrieval');
              
          /********** Interface ***********************/    
          $headertag['title'] = "Audit";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('administration/Report');
          $this->load->view('footer');
          /********** Interface ***********************/
  		  } 
        else 
        {
          $this->session->set_flashdata('error',"Permission Denied. Contact Administrator");
          redirect('Dashboard');
        }
      }
      else
      {
        redirect('Access/Login');
      }
  	}  

  /***************************  Data Insertion  *****************************/
  
	/***************************	Data Insertion	*****************************/
    /*****************************
	       New User
    *****************************/
    public function Add_User() 
    {
      if(isset($_SESSION['username']) )
      {
        if(in_array('Users-Can Add User',$_SESSION['priv_exploded'])) 
        {
          if(isset($_POST['add_usr'])) 
          {
            $this->form_validation->set_rules('id','Last ID','required|trim');
            $this->form_validation->set_rules('emp_id','Employee ID','required|trim');
            $this->form_validation->set_rules('usr_name','User Name','required|trim|is_unique[access_users.username]',array('is_unique[users.username]' => 'Error Message on rule2 for this field_name'));
            $this->form_validation->set_rules('usr_pwd_1','Password','trim|required|min_length[5]|max_length[12]');
            $this->form_validation->set_rules('usr_pwd_2','Confirm Password','trim|required|min_length[5]|max_length[12]|matches[usr_pwd_1]');

            # If Failed
            if($this->form_validation->run() === FALSE) 
            {
              $this->session->set_flashdata('error','All Fields Required');
              redirect('Administration/Users');
            }
            # If Passed
            else 
            {
              $data['employee_id']  = $this->input->post('emp_id');
              $data['username']     = $this->input->post('usr_name');
              $passwd_1             = $this->input->post('usr_pwd_1');
              $passwd_2             = $this->input->post('usr_pwd_2');
              $last_id              = explode('/', $this->input->post('emp_id'));
              $id                   = $this->input->post('id');
              
              if(strcmp($passwd_1, $passwd_2) == 0) 
              {
                $this->load->model('Model_Access');
                $this->load->model('Model_HR');

                $data['passwd'] = $this->Model_Access->encrypt_password($passwd_1);
                
                $result = $this->Model_Access->register_user($data);
                
                if($result) 
                {
                  $this->session->set_flashdata('success','User Registered.');

                  $this->Model_HR->last_employee_id_increase($last_id[2],$id);
                }
                
                else 
                  $this->session->set_flashdata('error','User Registration Failed.');
                
                redirect('Administration/Users');
              }
              else
              {
                $this->session->set_flashdata('error','Password Do Not Match.');
                redirect('Administration/Users');
              }
            }
          }
        }
        else
        {
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect('Dashboard');
        }
      }
      else
      {
        redirect('Access');
      }
    }

    /***********************************************
         Active / De-Activate User
    ************************************************/
    public function Activation() 
    {
      if(isset($_SESSION['username']) && in_array('Users-Activate / Deactivate Users',$_SESSION['priv_exploded']) && isset($_POST['activate_usr'])) 
      {
        $this->form_validation->set_rules('username','User','required|trim');
            
        if ($this->form_validation->run() === FALSE) 
        {
          $this->session->set_flashdata('error',"No User Selected.");
          redirect('Administration/Users');
        }
        
        else 
        {
          $this->load->model('Model_Access');

          $result = $this->Model_Access->deactivate_account($this->input->post('username'),1);
                
          if($result) 
            $this->session->set_flashdata('success',"User Activated.");  
         
         else 
            $this->session->set_flashdata('success',"User Activated.");  
              
          redirect('Administration/Users');
        }
      } 
        
      elseif(isset($_SESSION['username']) && in_array('Users-Activate / Deactivate Users',$_SESSION['priv_exploded']) && isset($_POST['deactivate_usr'])) 
      {
        //Setting validation rules
        $this->form_validation->set_rules('username','User','required|trim');
        
        if ($this->form_validation->run() === FALSE) 
        {
          $this->session->set_flashdata('error',"No User Selected.");
          redirect('Administration/Users');
        }
        
        else 
        {
          $this->load->model('Model_Access');

          $result = $this->Model_Access->deactivate_account($this->input->post('username'),0);
                
          if($result) 
            $this->session->set_flashdata('success',"User Deactived.");  
         
         else 
            $this->session->set_flashdata('error',"Deactivation Failed.");  
              
          redirect('Administration/Users');

        }
      }
 
      else
      {
        $this->session->set_flashdata('error',"Permission Denied. Contact Administrator");
        redirect('Administration/Users');
      }
    }

    /***********************************************
         Active / De-Activate User
    ************************************************/
    public function ResetPassword() 
    {
      if(isset($_SESSION['username']) && in_array('Users-Can Edit User Info.',$_SESSION['priv_exploded']) && isset($_POST['resetbtn'])) 
      {
        //Setting validation rules
        $this->form_validation->set_rules('userResetId','User','required|trim');
        $this->form_validation->set_rules('newpasswd','Password','required|trim');
        $this->form_validation->set_rules('confirmpasswd','Confirm Password','required|trim');
        
        if ($this->form_validation->run() === FALSE) 
        {
          $this->session->set_flashdata('error',"No User Selected.");
          redirect('Administration/Users');
        }
        
        else 
        {
          $this->load->model('Model_Access');

          if($this->input->post('newpasswd') == $this->input->post('confirmpasswd'))
          {
            $username = base64_decode($this->input->post('userResetId'));
            $password = $this->input->post('newpasswd');

            $result = $this->Model_Access->Reset_Password($username,$password);
                  
            if($result) 
              $this->session->set_flashdata('success',"Password Reset Successful");  
           
            else 
              $this->session->set_flashdata('error',"Password Reset Failed."); 
          }
          else
            $this->session->set_flashdata('error',"Password Mismatch. Re-enter");  

          redirect('Administration/Users');
        }
      }
      else
      {
        $this->session->set_flashdata('error',"Permission Denied. Contact Administrator");
        redirect('Administration/Users');
      }
    }
    
    /***********************************************
	       New Group
	  ************************************************/
    
    public function Add_Group() 
    {
        
        if( isset($_POST['add_grp']) && isset($_SESSION['username']) && in_array('Roles & Priv.',$_SESSION['rows_exploded']) ) {
	    	//Setting validation rules
			$this->form_validation->set_rules('grp_id','Group ID','required|trim');
            $this->form_validation->set_rules('grp_name','Group Name','required|trim');
            //$this->form_validation->set_rules('grp_desc','Group Description','trim|xss_clean');
            
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() == FALSE) {
                #Redirecting With Error
                $this->Roles_Priviledges();
            }
            # If Passed
            else {
	            #Variables Assignment
	            $data['group_id'] = $this->input->post('grp_id');
	            $data['name'] = ucwords($this->input->post('grp_name'));
	            //$data['desc'] = $this->input->post('grp_desc');
	            # Loading model...
	            $this->load->model('SettingsModel');
	            #
	            $result = $this->SettingsModel->create_grp($data);
	            
	            if($result) {
	                $_SESSION['success'] = "Group Created";
	            }
	            else {
	                $_SESSION['error'] = "Creating Group Failed."; 
	            }
	            /******* Interface ******/
					redirect('Administration/Roles_Priviledges');
	            /******* Interface ******/
	        }
		} else{
		 	$_SESSION['error'] = "Permission Denied. Contact Administrator";
			redirect('Administration/Roles_Priviledges');
		}
    }
    
    /***********************************************
	       Roles Assignment  
	************************************************/
    
    public function Assign_Roles() {
        
        if( isset($_POST['assign']) && isset($_SESSION['username']) && in_array('Roles & Priv.',$_SESSION['rows_exploded'])) {
  		    //Setting validation rules
	        $this->form_validation->set_rules('general[]','General Role(s)','trim');
            $this->form_validation->set_rules('site[]','Site Role(s)','trim');
            $this->form_validation->set_rules('accounts[]','Accounts Role(s)','trim');
            $this->form_validation->set_rules('procurement[]','Procurement Role(s)','trim');
            $this->form_validation->set_rules('human_resource[]','Human Resource Role(s)','trim');
            $this->form_validation->set_rules('stores[]','Store Role(s)','trim');
            $this->form_validation->set_rules('administration[]','Administration Role(s)','trim');
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() === FALSE) {
                #Redirecting With Error
                $this->Roles_Priviledges();
            }
            # If Passed
            else {
            	$Roles[] = $this->input->post('general[]');
	            $Roles[] = $this->input->post('site[]');
	            $Roles[] = $this->input->post('accounts[]');
	            $Roles[] = $this->input->post('procurement[]');
	            $Roles[] = $this->input->post('human_resource[]');
	            $Roles[] = $this->input->post('stores[]');
	            $Roles[] = $this->input->post('administration[]');

	            # Loading model...
	            $this->load->model('SettingsModel');
	            $this->load->model('UserModel'); 
	            #
	            foreach($Roles As $role_array) {
	                #
	                if(!empty($role_array)) {
	                    #code
	                    foreach($role_array As $role) {
	                        #
	                        if(!empty($role))
	                        	{
	                            	@$_SESSION['user_roles']['roles'] .= $role."|";
	                            	#Retrieving Priviledges Associated With Role
	                            	$data['priv_result'][$role] = $this->SettingsModel->retrieve_priviledges($role);
	                        	}
	                    }
	                } 
	            }
	            #
	            /****** Interface *******/
					$headertag['title'] = "Roles & Priviledges";
	            $this->load->view('headtag',$headertag);
	            $this->load->view('roles_priv',$data);
	            $this->load->view('footer');
	            /******* Interface ******/
	         }
		} 
		 else{
		 	$_SESSION['error'] = "Permission Denied. Contact Administrator";
			redirect('Administration/Roles_Priviledges');
		}
    }

    /***********************************************
	       Priviledges Assignment  
	************************************************/
    
    public function Assign_Priviledges() {
        
        if( isset($_POST['assign_priv']) && isset($_SESSION['username']) && in_array('Roles & Priv.',$_SESSION['rows_exploded'])) {
	    		//Setting validation rules
				$this->form_validation->set_rules('Priviledges[]','Priviledges','trim');
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() === FALSE) {
                #Redirecting With Error
                $this->Roles_Priviledges();
            }
            # If Passed
            else {
                #Loading Model 
                $this->load->model('SettingsModel');
                $this->load->model('Update');
                
                $Priviledges[] = $this->input->post('Priviledges[]');
                
                foreach($Priviledges As $value) {
                    #
                    if(!empty($value)) {
                        #
                        foreach($value As $val) {
                            #
                            if(!empty($val)) {
                                #
                                @$_SESSION['user_roles']['priviledges'] .= $val."|";
                            }
                        }
                    }
                }
                if(!empty($_SESSION['grp_request'])) {
                    #
                    $result = $this->SettingsModel->set_group_roles_priviledges($_SESSION['user_roles']);
                    unset($_SESSION['grp_request']);
                }
                else {
                    $result = $this->SettingsModel->set_user_roles_priviledges($_SESSION['user_roles']);
                    # Variables Declaration
                    $tablename = "users";
                    $IdField = "employee_id";
                    $FieldUpdate = "active_status";
                    #Variables Assignment
    	            $data['employee_id'] = $_SESSION['user_roles']['employee_id'];
                    $data['active_status'] = 1;
    	            
    	            $result = $this->Update->OneFieldUpdate($tablename,$IdField,$FieldUpdate,$data);
                 }
                
	            if($result) {
	                
	                $_SESSION['success'] = "Role(s) & Priviledge(s) Assigned";
	            }
	            else {
	                $_SESSION['error'] = "Role(s) & Priviledge(s) Assigning Failed"; 
	            }
	            /****** Interface *******/
					redirect("Administration/Roles_Priviledges");
	            /******* Interface ******/
	         }
		} 
		 else{
		 	$_SESSION['error'] = "Permission Denied. Contact Administrator";
			redirect('Administration/Roles_Priviledges');
		}
    }
    
    
    /***********************************************
	       Deactive User
	************************************************/
    
    public function Deactivate_User() 
    {
      if( isset($_SESSION['username']) && isset($_POST['deactivate_usr']) &&  in_array('Users',$_SESSION['rows_exploded']) ) {
	    	//Setting validation rules
			$this->form_validation->set_rules('employee_id','Employee ID','required|trim');
            
            #Checking Form Validation Rule Result
            # If Failed
            if ($this->form_validation->run() === FALSE) {
                #Redirecting With Error
                $_SESSION['error'] = "An Error Occurred.";
                $this->Roles_Priviledges();
            }
            # If Passed
            else {
	            #Variables Assignment
	            $data['employee_id'] = $this->input->post('employee_id');
                $data['active_status'] = 1;
	            
	            # Loading model...
	            $this->load->model('Update');
                
                # Variables Declaration
                $tablename = "users";
                $IdField = "employee_id";
                $FieldUpdate = "active_status";
	            
	            $result = $this->Update->OneFieldUpdate($tablename,$IdField,$FieldUpdate,$data);
		            
	            if($result) {
                   $_SESSION['success'] = "Action Successful";
	            }
	            else {
                   $_SESSION['error'] = "Action Failed"; 
	            }
		            
              /******* Interface ******/
			     redirect('Administration/Users');
              /******* Interface ******/
			      
            }
		} 
		 else{
		 	
            $_SESSION['error'] = "Permission Denied. Contact Administrator";
			redirect('Administration/Roles_Priviledges');
		}

    }

    /*********************************	Data Update	****************************/

    


  /*********************************	Data Delete	**************************/
    /***********************************
	       Delete User
	  ************************************/
    public function Delete_User() 
    {
      if(isset($_SESSION['username']))
      {
        if(in_array('Users-Can Delete User',$_SESSION['priv_exploded']) && isset($_POST['deletebutton']))
        {
          $this->form_validation->set_rules('deleteid','User','required|trim');

          if($this->form_validation->run() === FALSE) 
          {
            $this->session->set_flashdata('error','No User Selected');
            redirect('Administration');
          }
          else
          {
            $this->load->model('Model_Access');

            $userid = $this->input->post('deleteid');

            $result = $this->Model_Access->delete_user($userid);
                
            if($result) 
              $this->session->set_flashdata('success',"User Deleted");
            
            else 
              $this->session->set_flashdata('error','Delete Failed');
            
            redirect('Administration/Users');
          }
        }
        else
        {
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect('Administration/Users');
        }
      }
      else
        redirect('Access');
    }
  /*********************************  Data Delete **************************/
    
}//End of Class
