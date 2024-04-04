<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Universal_Insertion extends CI_Model 
{
	/***********************************************
			New Supplier 
	************************************************/
	public function DataInsert($tablename, $data) 
	{
    $query = $this->db->insert($tablename,$data);
        
    $result = $this->db->affected_rows(); 
        
    return(($result > 0) ? true : false);
	}
    
    /***********************************************
			Stored Procedure Calling 
	************************************************/
    
    public function Single_Prod($data) {
        
        $query = "CALL single_prod_reg(?,?,?,?,?)";
        
        $result = $this->db->query($query,array('prod_id' => $data['prod_id'],'cat_id' => $data['cat_id'],'prod_name' => $data['prod_name'],'location' => $data['location'],'desc_id' => $data['desc_id']));
        
        //$result = $this->db->affected_rows(); 
        
        return((true) ? true : false);
  
	}
    
}//End of class
