<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Universal_Update extends CI_Model 
{
  /***********************************************
          Supplier
  ************************************************/
  public function supplier($data) 
  {

        $tablename = "suppliers";
        
        $this->db->set('name',$data['name']);
        
        $this->db->set('tel1',$data['tel1']);
        
        $this->db->set('tel2',$data['tel2']);
        
        $this->db->set('addr',$data['addr']);
        
        $this->db->set('email',$data['email']);
        
        $this->db->set('fax',$data['fax']);
        
        $this->db->where('sup_id',$data['sup_id']);
        
        $query = $this->db->update($tablename);
        
        $result = $this->db->affected_rows();
                
        return (($result >= 0) ? true : false );

    }

    /***********************************************
            Category
    ************************************************/
    
    public function OneFieldUpdate($tablename,$IdField,$FieldUpdate,$data) {

        $this->db->set($FieldUpdate,$data[$FieldUpdate]);
        
        $this->db->where($IdField,$data[$IdField]);
        
        $query = $this->db->update($tablename);
        
        $result = $this->db->affected_rows();
                
        return (($result >= 0) ? true : false );

    }

    /***********************************************
      Single Field Update
    ************************************************/
    public function Single_Field_Update($tablename,$setData,$where_condition) 
    {
      $this->db->set($setData['dbField'],$setData['updateVal']);
        
      $this->db->where($where_condition);
        
      $query = $this->db->update($tablename);
        
      $result = $this->db->affected_rows();
                
      return (($result >= 0) ? TRUE : FALSE );

      //print $this->db->get_compiled_update($tablename);
    }

    
}//End of class
