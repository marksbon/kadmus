<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Model_Stock extends CI_Model 
{
  /******************************** Data Retrieval ******************************************/
    /***********************************************
      Employee Info
    ************************************************/
    public function ret_last_id($field,)
    {
      $tablename = "employee_personal_data";
      
      $where = array('EmployeeID'=>$employee_id);
      
      $query = $this->db->get_where($tablename,$where);
      
      return(($query->num_rows() == 1) ? $query->row() : FALSE ); 
    }

  /******************************** Data Retrieval ******************************************/

  /******************************** Data Insertion ******************************************/
		
  	/***********************************************
        Last Employee ID
    ************************************************/
    public function last_employee_id_increase($lastid,$id) 
    {
      $tablename = "general_last_ids";

      $this->db->set('employee_id',$lastid);

      $this->db->where('id',$id);
          
      $query = $this->db->update($tablename);

      $result = $this->db->affected_rows(); 
        
      return(($result > 0) ? true : false);
    }

    /***********************************************
  			Register Company
  	************************************************/
  	public function register_comp($data) 
    {
      $query = $this->db->count_all('companyinfo');
          
          if($query <= 0 ) {

  		$query = $this->db->insert('companyinfo',$data);
  		
  		return (($query) ? true : false );
          
          } else {
              
              $_SESSION['form_link'] = "Edit_Companyinfo";
              return false;
          }
          
  	}

    /***********************************************
            Adding Department
    ************************************************/
    
    public function add_dept($data){
        
        //echo $this->db->set($data)->get_compiled_insert('departments');
        $query  = $this->db->insert('departments',$data);
        $result = $this->db->affected_rows(); 
        
        return(($result > 0) ? true : false);
    }

    /***********************************************
            Adding Site
    ************************************************/
    
    public function add_site($data){
        
        //echo $this->db->set($data)->get_compiled_insert('departments');
        $query  = $this->db->insert('sites',$data);
        $result = $this->db->affected_rows(); 
        
        return(($result > 0) ? true : false);
    }
    
    /***********************************************
            Adding Group
    ************************************************/
    
    public function create_grp($data){
        
        $tablename = "group_roles_priviledges";
        
        $query  = $this->db->insert($tablename,$data);
        
        $result = $this->db->affected_rows(); 
        
        return(($result > 0) ? true : false);
    }

     /***********************************************
            User Roles
    ************************************************/
    
    public function set_user_roles_priviledges($data){
        
        $tablename = "user_roles_priviledges";
        
        $this->db->where('employee_id',$data['employee_id'] );

        $query = $this->db->update($tablename, $data);
        
        $result = $this->db->affected_rows(); 
        
        return(($result > 0) ? true : false);
        
    }
    
    /***********************************************
            Group Roles
    ************************************************/
    
    public function set_group_roles_priviledges($data){
        
        //print_r($data);
        
        $tablename = "group_roles_priviledges";
        
        $this->db->where('group_id',$data['group_id'] );

        $query = $this->db->update($tablename, $data);
        
        $result = $this->db->affected_rows(); 
        
        return(($result > 0) ? true : false);
        
    }
    
    /***********************************************
            User Roles
    ************************************************/
    
    public function ret_usr_roles($user_id){
        
        $tablename = "user_roles_priviledges";
        
        $this->db->where('employee_id',$user_id );

        $query = $this->db->get($tablename); 
        
        return(($query->num_rows() > 0) ? $query->result() : false);
        
    }

    
     /*********************************************************************************************************************************************
    ****************************************************** Data Retrival **************************************************************************
    ***********************************************************************************************************************************************/
	
    /***********************************************
			Retrieve Company Info
	************************************************/
    
    public function retrieve_companyinfo(){
        
        $tablename = "companyinfo";
        
        $query = $this->db->get($tablename);
        
        if($query->num_rows() > 0) {
            
            $_SESSION['button_name'] = "Edit Info";
            $_SESSION['button_link'] = "Edit_Company";
            
            return($query->result());
        }
        else {
            
            $_SESSION['button_name'] = "Register";
            $_SESSION['form_link'] = "Register_Company";
        }
    }

    /***********************************************
            Retrieving Last Department ID
    ************************************************/
    
    public function retrieve_dept_id(){
        
        $this->db->select('id');

        $this->db->order_by('id','DESC');

        $query = $this->db->get('departments');
        
        return ( ($query->num_rows() > 0) ? $query->row(0) :false );
    }
    
    /***********************************************
            Retrieving Last Group ID
    ************************************************/
    
    public function retrieve_grp_id(){
        
        $this->db->select('group_id');

        $this->db->order_by('group_id','DESC');

        $query = $this->db->get('group_roles_priviledges');
        
        return ( ($query->num_rows() > 0) ? $query->row(1) :false );
    }

    /***********************************************
            Retrieving Last Site ID
    ************************************************/
    
    public function retrieve_site_id(){
        
        $this->db->select('id');

        $this->db->order_by('id','DESC');

        $query = $this->db->get('sites');
        
        return ( ($query->num_rows() > 0) ? $query->row(0) :false );
    }

    /***********************************************
            Retrieving Last Employee ID
    ************************************************/
    
    public function retrieve_emp_id(){
        
        $this->db->select('employee_id');

        $this->db->order_by('employee_id','DESC');

        $query = $this->db->get('employees');
        
        return ( ($query->num_rows() > 0) ? $query->row(0) :false );
    }

    /***********************************************
            Retrieving Last Employee Temp ID
    ************************************************/
    public function ret_last_employee_id()
    {
      $tablename = "general_last_ids";

      $query = $this->db->get($tablename);
       
      return ( ($query->num_rows() > 0) ? $query->row(0) :false );
    }

    /***********************************************
            Retrieving Department
    ************************************************/
    
    public function retrieve_dept(){

        $tablename = "departments";
        
        $query = $this->db->get($tablename);
        
        if($query->num_rows() > 0) {
            
            return $query->result();
        }
        else {
            
            return false;
        }
    }

    /***********************************************
            Retrieving Site
    ************************************************/
    
    public function retrieve_site(){
        
        $query = $this->db->get('sites');
        
        if($query->num_rows() > 0) {
            
            return $query->result();
        }
        else {
            
            return false;
        }
    }

    /***********************************************
            Retrieving Group Roles By ID
    ************************************************/
    
    public function ret_grp_roles_id($group_id){
        
        $tablename = "group_roles_priviledges";
        
        $where = array('group_id'=>$group_id);
        
        $query = $this->db->get_where($tablename,$where);
        
        return ( ($query->num_rows() > 0) ? $query->result() :false );
    }

    /***********************************************
            Retrieving Position
    ************************************************/
    
    public function retrieve_position(){
        
        $query = $this->db->get('position');
        
        if($query->num_rows() > 0) {
            
            return $query->result();
        }
        else {
            
            return false;
        }
    }

    /***********************************************
            Retrieving Questionnaires
    ************************************************/
    
    public function retrieve_Questionnaires($criteria){
        
        $tablename = "questionnaires";
        
        $where = array('major_grade'=>$criteria);
        
        $query = $this->db->get_where($tablename,$where);
        
        if($query->num_rows() > 0) {
            
            return $query->result();
        }
        else {
            
            return false;
        }
        
    }

    /***********************************************
            Retrieving Tabs Priviledges
    ************************************************/
    
    public function retrieve_priviledges($tabname){
        
        $tablename = "dashboard_tabs";

        $this->db->select('priviledges,type');
        
        $where = array('name'=>$tabname );
        
        $query = $this->db->get_where($tablename, $where);
        
        $result = $this->db->affected_rows();
        
        return(($result > 0) ? $query->result() :  false);      
    }
    
    /***********************************************
            Retrieving Total No Users
    ************************************************/
    
    public function users(){
        
        $tablename = "users";
        
        $query = "SELECT COUNT('employee_id') As user_total FROM $tablename WHERE employee_id != 'ML/SYS/1'";
        
        $query = $this->db->query($query);
        
        return(($query->num_rows() > 0) ? $query->row(0) : false );
          
    }
    
    /***********************************************
            Retrieving Total No Groups
    ************************************************/
    
    public function groups(){
        
        $tablename = "group_roles_priviledges";
        
        $query = "SELECT COUNT('group_id') As group_total FROM $tablename WHERE group_id != 'KAD/GRP/SYS'";
        
        $query = $this->db->query($query);
        
        return(($query->num_rows() > 0) ? $query->row(0) : false );
          
    }

    /***********************************************
            All Users
    ************************************************/
    
    public function allusers(){
        
        $tablename = "users";
        
        $query = $this->db->get($tablename);
        
        return(($query->num_rows() > 0) ? $query->result() : false );
          
    }

     /***********************************************
            All Users
    ************************************************/
    
    public function allgroups(){
        
        $tablename = "group_roles_priviledges";
        
        $query = $this->db->get($tablename);
        
        return(($query->num_rows() > 0) ? $query->result() : false );
          
    }

     /***********************************************************************************************************************************************
****************************************************** Data Edit+Update *********************************************************
***********************************************************************************************************************************************/
    
    /***********************************************
			Edit Company Info
	************************************************/
    
    public function edit_companyinfo(){
        
        $query = $this->db->get('companyinfo');
        
        if($query->num_rows() > 0) {
            
            $_SESSION['button_name'] = "Update Info";
            $_SESSION['button_sub_name'] = "Update_Info";
            $_SESSION['form_link'] = "Update_Company";
            return($query->result());
            
        }
        else {
            
            echo "Error From settings_model -> edit_companyinfo";
        }
    }
    
    /***********************************************
			Update Company Info
	************************************************/
    
    public function update_companyinfo($data,$id) {
        
        $tablename = "companyinfo";

        $this->db->where('id',$id );

        $query = $this->db->update($tablename, $data);

        $result = $this->db->affected_rows();
        
        return(($result > 0) ?  true :  false);
    }

    /***********************************************
            Update Department
    ************************************************/
    
    public function update_dept($data,$id){
        
        $this->db->where('id',$id );
        $query = $this->db->update('departments', $data);
        
        return(($query->affected_rows > 0) ?  true :  false);
         
    }

    /***********************************************
            Update Site
    ************************************************/
    
    public function update_site($data,$id){
        
        $this->db->where('id',$id );
        $query = $this->db->update('sites', $data);
        
        return(($query->affected_rows > 0) ?  true :  false);
         
    }

    /***********************************************
            Update Position
    ************************************************/
    
    public function update_position($data,$id){
        
        $this->db->where('id',$id );
        $query = $this->db->update('position', $data);
        
        ($query->affected_rows > 0) ?  true :  false;
         
    }

    /***********************************************
            Update Grade Category
    ************************************************/
    
    public function update_grade_category($data,$id){
        
        $this->db->where('id',$id );
        
        $query = $this->db->update('questionnaires', $data);
        
        $result = $this->db->affected_rows();
        
        return(($result > 0) ?   true :  false);      
    }

    /***********************************************
            Postion Roles & Priviledges
    ************************************************/
    
    public function update_postion_roles_priv($data,$condition){
        
        $this->db->where('name',$condition );
        
        $query = $this->db->update('position', $data);
        
        $result = $this->db->affected_rows();
        
        return(($result > 0) ?   true :  false);      
    }

    /*******************************************************************************************************************************************
    ********************************************************** Data Delete *********************************************************************
    ********************************************************************************************************************************************/

    /***********************************************
            Deleting Department
    ************************************************/
    
    public function delete_department($id){
        
        $this->db->where('id',$id );
        $query = $this->db->delete('departments');

        $result = $this->db->affected_rows();
        
        return(($result > 0) ?  true :  false);
         
    }

    /***********************************************
            Deleting Site
    ************************************************/
    
    public function delete_site($id){
        
        $this->db->where('id',$id );
        $query = $this->db->delete('sites');

        $result = $this->db->affected_rows();
        
        return(($result > 0) ?  true :  false);
         
    }

    /***********************************************
            Deleting Position
    ************************************************/
    
    public function delete_position($id){
        
        $this->db->where('id',$id );
        $query = $this->db->delete('position');

        $result = $this->db->affected_rows();
        
        return(($result > 0) ?  true :  false);
         
    }

    /*******************************************************************************************************************************************************/
    /*******************************************************************************************************************************************************/

    
	
}//End of class
