<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Model_Access extends CI_Model {

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
			Username dblookup => Login Page
	************************************************/
	public function verify_username($tablename,$username,$usertype)
	{
		$this->db->where('username',$username);

		$query = $this->db->get($tablename);
		
		if($query->num_rows() == 1) 
		{
			$row = $query->row();

			if($usertype == "client")
				$data = 
				[
					'encrypted_password'  => $row->passwd,
					'employee_id'	        => $row->employee_id,
	      	'first_login'			 		=> $row->f_login,
	      	'account_active'			=> $row->active, 	
	      	'login_attempt'		 		=> $row->login_attempt
	      ];
	    
	    elseif($usertype == "sysadmin")
	    	$data = 
				[
					'encrypted_password'  => $row->passwd,
					'secret_code'  				=> $row->secret_code,
					'employee_id'	        => $row->sys_user_id,
	      	'account_active'			=> $row->active, 	
	      	'login_attempt'		 		=> $row->login_attempt
	      ];
            
			return $data;
		}
        
    else 
      return FALSE;
	}

	/***********************************************
		Employee Roles & Privileges => Login Page
	************************************************/
	public function roles_priviledges_user($tablename,$employee_id)
	{
		$this->db->where('employee_id',$employee_id);
		
		$query = $this->db->get($tablename);
		
		return(($query->num_rows() == 1) ? $query->row() : false );	
	}

	/***********************************************
		Group Roles & Privileges => Login Page
	************************************************/
	public function roles_priviledges_group($tablename,$group_id)
	{
		$this->db->where('group_id',$group_id);
		
		$query = $this->db->get($tablename);
		
		return(($query->num_rows() == 1) ? $query->row() : false );	
	}

	/***********************************************
            Retrieving Dashboard Tabs
  ************************************************/
  public function dashboard_tabs()
  {
    $tablename = "dashboard_tabs";
        
    $query = $this->db->get($tablename);
        
    return(($query->num_rows() > 0) ? $query->result() : false );    
  }

	/***********************************************
			Logging Sign In
	************************************************/
	public function login_record($data) 
	{
		$tablename = "access_login_success";
		
		$query = $this->db->insert($tablename,$data);

		$loginid = $this->db->insert_id();
				
		return (($query) ? $loginid : false );
	}

	/***********************************************
			Login Attempt 
	************************************************/
	public function decrease_login_attempt($username) 
  {
    # Retrieveing current attempt no
    $tablename = "access_users";

    $this->db->select('login_attempt');

    $this->db->where('username',$username);

    $attempt = $this->db->get($tablename);

    if($attempt && $attempt->row('login_attempt') > 0) 
    {
      $attemptleft = $attempt->row('login_attempt') - 1;
      # Updating 
      $this->db->set('login_attempt',$attemptleft);
      
      $this->db->where('username',$username);
      
      $query = $this->db->update($tablename);
    }
    else
    	$attemptleft = 0;

    return ($attemptleft);
	}

	/***********************************************
			De-activate Account 
	************************************************/
	public function deactivate_account($username,$state)
	{
		$tablename	= "access_users";

		$this->db->set('active',$state);

		$this->db->where('username',$username);

		$this->db->update($tablename);

		$result = $this->db->affected_rows();
					
		return (($result) ? TRUE : FALSE );
	}

	/***********************************************
			Reset User Password
	************************************************/
	public function Reset_Password($username,$password)
	{
		$tablename	= "access_users";

		$defaultPasswd = $this->encrypt_password($password);
		
		$this->db->set('passwd',$defaultPasswd);

		$this->db->where('username',$username);

		$this->db->update($tablename);

		$result = $this->db->affected_rows();
					
		return (($result) ? TRUE : FALSE );
	}

	/***********************************************
			Failed Login 
	************************************************/
	public function fakelogin_log($data)
	{
		$tablename	= "access_login_failed";

		$result = $this->db->insert($tablename,$data);

		return (($result) ? TRUE : FALSE );
	}

	/***********************************************
			Failed Login 
	************************************************/
	public function delete_user($userid)
	{
		$tablename	= "access_users";

		$this->db->where('id',$userid);
        
    $query = $this->db->delete($tablename);
        
    $result = $this->db->affected_rows();
                
    return (($result > 0) ? TRUE : FALSE );
	}

  /***********************************************
          Retrieving Last Group ID
  ************************************************/
  public function ret_last_group_id()
  {
    $tablename = "general_last_ids"; 

    $query = $this->db->get($tablename);
        
    return ( ($query->num_rows() > 0) ? $query->row(0) :false );
  }


	/***********************************************
			Retrieving Dept Name / Group Name
	************************************************/

	public function ret_grp_name($search,$tablename) {
		
		$this->db->select('name');

		$where = array('group_id'=>$search);

		$query = $this->db->get_where($tablename,$where); 
		
		return(($query->num_rows() == 1) ? $query->result() : false );	

	}
    
    /***********************************************
			Retrieving Dept Name / Group Name
	************************************************/

	public function ret_dep_name($search,$tablename) {
		
		$this->db->select('name');

		$where = array('id'=>$search);

		$query = $this->db->get_where($tablename,$where); 
		
		return(($query->num_rows() == 1) ? $query->result() : false );	

	}
    
    /***********************************************
			Retrieving Dept ID / POS ID
	************************************************/

	public function ret_dept_grp_id($search,$tablename) {
		
		$this->db->select('id');

		$where = array('name'=>$search);

		$query = $this->db->get_where($tablename,$where); 
		
		return(($query->num_rows() == 1) ? $query->result() : false );	

	}
    
    /***********************************************
			Retrieving  Roles Details 
	************************************************/
	
	public function ret_roles_details($rowname) {
	   
       $tablename = "dashboard_tabs";
       
       $where = array('name'=>$rowname);
       
       $query = $this->db->get_where($tablename,$where);
       
       return($query->num_rows() > 0 ? $query->result() : false);
	}
    
    /***********************************************
			Retrieving  Users Country 
	************************************************/
	
	public function Country($cou_code) {
	   
       $tablename = "countries";
       
       $where = array('cou_code'=>$cou_code);
       
       $query = $this->db->get('countries');
       
       return($query->num_rows() > 0 ? $query->result() : false);
	}

	/***********************************************
			Retrieving department members
	************************************************/

	public function department_members($department){
		
		//Retrieving DEPT and POS ID FROM Name
		$dept_id_ret = $this->ret_dept_pos_id('departments',$department);
		
		foreach ($dept_id_ret as $dept_id_loop) {
			# code...
			$dept_id = $dept_id_loop->id;
		}
		
		$tablename = "employees";

		$this->db->select('employee_id,fullname');
		
		$where = array('department_id'=>$dept_id);
		
		$query = $this->db->get_where($tablename,$where);
		
		return(($query->num_rows() > 0) ? $query->result() : false );	

	}

	/***********************************************
			Retrieving Supervisor Name
	************************************************/

	public function SupervisorName($department){
		
		if(!empty($department)) {
			//Retrieving DEPT and POS ID FROM Name
			$dept_id_ret = $this->ret_dept_pos_id($department,'departments');
			
			if (!empty($dept_id_ret)) {
				# code...
				foreach ($dept_id_ret as $dept_id_loop) {
					# code...
					$dept_id = $dept_id_loop->id;
				}
			}

			$pos_id_ret  = $this->ret_dept_pos_id('Supervisor','position');

			if (!empty($pos_id_ret)) {
				# code...
				foreach ($pos_id_ret as $pos_id_loop) {
					# code...
					$pos_id = $pos_id_loop->id;
				}
			}

			if(!empty($dept_id) && !empty($pos_id)) {
			
				$tablename = "employees";

				$this->db->select('lname,fname');

				$where = array('department_id'=>$dept_id,'position_id'=>$pos_id);

				$query = $this->db->get_where($tablename,$where); 
				
				return(($query->num_rows() == 1) ? $query->result() : false );
			}
		}	

	}

	/***********************************************
			Retrieving Supervisor Name
	************************************************/

	public function Head_Of_Dept($department){
		
		if(!empty($department)) {

			//Retrieving DEPT and POS ID FROM Name
			$dept_id_ret = $this->ret_dept_pos_id($department,'departments');
			
			if (!empty($dept_id_ret)) {
				# code...
				foreach ($dept_id_ret as $dept_id_loop) {
					# code...
					$dept_id = $dept_id_loop->id;
				}
			}

			$pos_id_ret  = $this->ret_dept_pos_id('Head Of Department','position');

			if (!empty($pos_id_ret)) {
				# code...
				foreach ($pos_id_ret as $pos_id_loop) {
					# code...
					$pos_id = $pos_id_loop->id;
				}
			}

			if(!empty($dept_id) && !empty($pos_id)) {
			
				$tablename = "work";

				$this->db->select('employee_id');

				$where = array('dept_id'=>$dept_id,'position_id'=>$pos_id);

				$query = $this->db->get_where($tablename,$where); 
				
				if ($query->num_rows() == 1)
					$employee_id = $query->result();
				else
					$employee_id = "" ;
			}

			print $employee_id;

			
		}	

	}

	/***********************************************
			Retrieving All Employees 
	************************************************/
	
	public function allemployees() {

		$query = $this->db->get('emp_pers_info');
		
		return($query->num_rows() > 0 ? $query->result() : false);
	}

	/***********************************************
			Retrieving All Pending Users 
	************************************************/
	
	public function pendingusers() {

		$tablename = "users";

		$this->db->where('new_login','0');

		$query = $this->db->get($tablename);
		
		return($query->num_rows() > 0 ? $query->result() : false);
	}

	/***********************************************
			Retrieving  Certificates 
	************************************************/
	
	public function certificate() {

		$this->db->order_by('cert_id','ASC');

		$query = $this->db->get('certificates');
		
		return($query->num_rows() > 0 ? $query->result() : false);
	}

	/***********************************************
			Retrieving User Info
	************************************************/

	public function user_info($employee_id){
		
		$tablename = "users";
		
		$where = array('employee_id'=>$employee_id);

		$query = $this->db->get_where($tablename,$where); 
		
		return(($query->num_rows() == 1) ? $query->result() : FALSE );	

	}

	/***********************************************************************************************************************************************
    ****************************************************** Data Insertion **************************************************************************
    ***********************************************************************************************************************************************/

	

	/***********************************************
			Logging Sign Out
	************************************************/
	public function logout_log($login_id) 
	{
		$tablename = "access_login_success";

		$this->db->set('online',0);

		$this->db->where('login_id',$login_id);

		$query = $this->db->update($tablename);

		$result = $this->db->affected_rows();
				
		return (($query) ? TRUE : FALSE );
	}

    
  /***********************************************
			Registering User
	************************************************/
	public function register_user($data) 
	{
		$tablename = "access_users";
		
		$query = $this->db->insert($tablename,$data);

    return (($query) ? true : false );			
	}

	/***********************************************
			Registering Employee Info
	************************************************/
	
	public function employee_info_insert($data) {

		$tablename = "employees";
		
		$data['employee_id'] = "PENDING";
		
		//$query = $this->db->insert($tablename,$data);

        //return (($query) ? true : false );	

        print $this->db->get_compiled_insert();
			
	}

	/***********************************************
			Registering Work Info
	************************************************/
	
	public function work($data) {

		$tablename = "work";
		
		//CHECKING FOR New User
		if (empty($data['employee_id'])) {
			# code...
            //Settings and performing insertion
            $data['new_login'] = 0;

            $query = $this->db->insert($tablename,$data);

            return (($query) ? true : false );	
			
		}

		else{

			//Updating User Info 
			$this->db->set('username',$data['username']);
			$this->db->set('passwd'   ,$data['passwd']);
			$this->db->set('new_login',1);
			$this->db->where('employee_id',$data['employee_id']);
				
			$query = $this->db->update('users');

			$result = $this->db->affected_rows();
					
			return (($result == 1) ? true : false );
		}

	}

	/***********************************************************************************************************************************************
    ****************************************************** Data Update *****************************************************************************
    ***********************************************************************************************************************************************/

	/***********************************************
			Updating Employee Info
	************************************************/
	
	public function update_employee($data) {

		//updating employee data
		$this->db->set('employee_id',$data['employee_id']);
		$this->db->set('fullname'   ,$data['fullname']);
		$this->db->set('department_id' ,$data['department_id']);
		$this->db->set('jobtitle'   ,$data['jobtitle']);
		$this->db->set('position_id'   ,$data['position_id']);
		$this->db->where('employee_id',$data['old_employee_id']);
		//echo $this->db->get_compiled_update('employees'). "<br>";
		$query = $this->db->update('employees');
		$result1 = $this->db->affected_rows();
				
		$this->db->reset_query();

		if (strcasecmp($data['old_employee_id'], $data['employee_id']) == 0) 
			#code
			$employee_id = $data['old_employee_id'];

		else
			#code
			$employee_id = $data['employee_id'];
	
		//updating user data
		$this->db->set('employee_id',$data['employee_id']);
		$this->db->set('username',$data['username']);
		$this->db->set('passwd',$data['passwd']);
		$this->db->where('employee_id',$data['old_employee_id']);
		//echo $this->db->get_compiled_update('users');
		$query = $this->db->update('users');
		$result2 = $this->db->affected_rows();

		echo $result1. " ". $result2;
				
			//return (($query) ? true : false );

		//return (($result >= 0) ? true : false );

	}

	/***********************************************
			Updating User Password
	************************************************/
	
	public function changepwd($newpwd_encrypted,$employee_id) {

		//updating employee data
		$this->db->set('passwd',$newpwd_encrypted);
		$this->db->where('employee_id',$employee_id);
		//echo $this->db->get_compiled_update('employees'). "<br>";
		
		$query = $this->db->update('users');
		$result1 = $this->db->affected_rows();
				
		return (($result >= 0) ? true : false );

	}
    
    
    
	

	/***********************************************************************************************************************************************
    ****************************************************** Data Delete *****************************************************************************
    ***********************************************************************************************************************************************/

    /***********************************************
            Deleting User
    ************************************************/
    
    public function delete_use($employee_id){
        
        $this->db->where('employee_id',$employee_id );
        $query = $this->db->delete('employees');

        $this->db->reset_query();

        $this->db->where('employee_id',$employee_id );
        $query = $this->db->delete('users');

        $result = $this->db->affected_rows();
        
        return(($result > 0) ?  true :  false);
         
    }
    
    
	
}
