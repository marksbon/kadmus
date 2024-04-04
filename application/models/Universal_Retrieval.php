<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Universal_Retrieval extends CI_Model 
{
	/*******************************
		Constructor 
	*******************************/
	public function index() 
  {
			#Redirect to Dashboard Where Roles Are Defined
			redirect('Access');
	}
    
  ############################### Generating ID ################################
    
    /***********************************************
			Generating New ID
    ************************************************/
    public function LastID($TableName,$FieldName) 
    {
      $this->db->select($FieldName);

      $query = $this->db->get($TableName);
        
      return ( ($query->num_rows() > 0) ? $query->row(0) : FALSE );
	  }
  ############################### Generating ID ################################
    
  ############################### All Data Info ################################
  	public function All_Info_Row($tablename) 
      {
          $query = $this->db->get($tablename);
              
          return ( ($query->num_rows() > 0) ? $query->row() :false );
  	}

    public function All_Info($tablename) 
    {
      $query = $this->db->get($tablename);
              
      return ( ($query->num_rows() > 0) ? $query->result() :false );
    }

    public function All_Info_API($tablename) 
    {
      $query = $this->db->get($tablename);
              
      return ( ($query->num_rows() > 0) ? json_encode($query->result()) :false );
    }
  ############################### All Data Info ################################
    
    ############################### Retrieval Table Fields ########################
    /***********************************************
            Retreieve Table Fields 
    ************************************************/
    
    public function ret_table_fields($tablename) 
    { 
        $result = $this->db->list_fields($tablename); 
        
        return(($result) ? $result : false);  
    }
    
    ############################### Retrieval With Single Condition ########################
    /***********************************************
            Retreieve Table Fields 
    ************************************************/
    public function ret_data_with_s_cond($tablename,$IdField,$data) 
    { 
      $tablename = $tablename;
        
      $this->db->where($IdField,$data[$IdField]);
        
      $query = $this->db->get_where($tablename); 
        
      return ( ($query->num_rows() > 0) ? $query->result() :false );
    }

    /***********************************************
            Retreieve Table Fields 
    ************************************************/
    public function ret_data_with_s_cond_boolean($tablename,$IdField,$data) 
    { 
      $tablename = $tablename;
        
      $this->db->where($IdField,$data[$IdField]);
        
      $query = $this->db->get_where($tablename); 
        
      return ( ($query->num_rows() > 0) ? TRUE : FALSE );
    }
    
}//End of class
