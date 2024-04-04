<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class OrganizationModel extends CI_Model {
		
	############################### Generating ID ################################
    
    /***********************************************
			Generating New ID
	************************************************/
	
	public function GenerateID($TableName,$FieldName) 
    {
        $this->db->select($FieldName);

        $this->db->order_by($FieldName,'DESC');

        $query = $this->db->get($TableName);
        
        return ( ($query->num_rows() > 0) ? $query->row(0) :false );
	}
    
    ############################### All Data Info ################################
	
	public function All_Info($tablename) 
    {
        $query = $this->db->get($tablename);
        
        return ( ($query->num_rows() > 0) ? $query->result() :false );
	}
    
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
    
}//End of class
