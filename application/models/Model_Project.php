<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Model_Project extends CI_Model 
{
  /******************************** Data Retrieval ******************************************/
    /***********************************************
      Employee Info
    ************************************************/
    public function ret_last_id($field)
    {
      $tablename = "general_last_ids";
      
      $where = array('EmployeeID'=>$employee_id);
      
      $query = $this->db->get_where($tablename,$where);
      
      return(($query->num_rows() == 1) ? $query->row() : FALSE ); 
    }

    /***********************************************
      Project Full Info ==> CodeName
    ************************************************/
    public function ret_proj_full_info($CodeName)
    {
      $tablename = "project_full_details";
      
      $where = array('CodeName'=>$CodeName);
      
      $query = $this->db->get_where($tablename,$where);
      
      return(($query->num_rows() > 0) ? $query->result() : FALSE ); 
    }

    /***********************************************
      Project Phases ==> ProjectId
    ************************************************/
    public function ret_proj_phases($projectid)
    {
      $tablename = "project_phases";
      
      $where = array('proj_id'=>$projectid);
      
      $query = $this->db->get_where($tablename,$where);
      
      return(($query->num_rows() > 0) ? $query->result() : FALSE ); 
    }

    /***********************************************
      Artisans Task ==> Artisan's Name & PhaseID
    ************************************************/
    public function ret_artisan_task($artisan,$phaseid)
    {
      $tablename = "project_tasks";
      
      $where = array('ph_artisan'=>$artisan,'phase_id'=>$phaseid);
      
      $query = $this->db->get_where($tablename,$where);

      return(($query->num_rows() > 0) ? $query->result() : FALSE ); 
    }

    /***********************************************
      Artisans Report ==> Artisan's Name & PhaseID
    ************************************************/
    public function ret_artisan_report($artisan,$phaseid)
    {
      $tablename = "project_reports";
      
      $where = array('artisan'=>$artisan,'phase_id'=>$phaseid);
      
      $query = $this->db->get_where($tablename,$where);

      return(($query->num_rows() > 0) ? $query->result() : FALSE ); 
    }

    /***********************************************
      Total No. Of Task Under A Project
    ************************************************/
    public function Project_Total_Task($projectid)
    {
      $taskcounter = 0; $taskcompleted = 0;

      $phases = $this->ret_proj_phases($projectid);
      if(!empty($phases))
      {
        foreach($phases As $phase)
        {
          $artisans = explode('#', $phase->ph_artisans);
          if(!empty($artisans))
          {
            foreach ($artisans as $artisan) 
            {
              $artisanTask = $this->ret_artisan_task($artisan,$phase->id);
              if(!empty($artisanTask))
              {
                foreach ($artisanTask as $taskcount) 
                {
                  if(!empty($taskcount->tk_name))
                    $taskcounter++;
                  
                  if($taskcount->status == 1)
                    $taskcompleted++;
                }
              }
            }
          }
        }
      }
              
      return $taskinfo = [ 'TotalTask' => $taskcounter, 'TaskCompleted' => $taskcompleted ];
    }

    /***********************************************
      Report Retrieve - artisan/phaseid/tk_id
    ************************************************/
    public function report_check($artisan,$phaseid,$taskid)
    {
      $tablename = "project_reports";
      
      $where = array('artisan'=>$artisan,'phase_id'=>$phaseid, 'tk_id'=>$taskid);
      
      $query = $this->db->get_where($tablename,$where);

      return(($query->num_rows() > 0) ? $query->row() : FALSE ); 
    }

    /***********************************************
      All Request By User 
    ************************************************/
    public function User_Request()
    {
      $tablename = "project_requests";
      
      $where = array('requested_by'=>$_SESSION['employee_id']);
      
      $query = $this->db->get_where($tablename,$where);

      return(($query->num_rows() > 0) ? $query->result() : FALSE ); 
    }

  /******************************** Data Retrieval ******************************************/

  /******************************** Data Insertion ******************************************/
  	/***********************************************
      New Project Phase
    ************************************************/
    public function create_project_phase($data) 
    {
      $tablename = "project_phases";

      $query  = $this->db->insert_batch($tablename,$data);
      
      $result = $this->db->affected_rows(); 
        
      return(($result > 0) ? true : false);     
    }

    /***********************************************
      Update Artisan's Task
    ************************************************/
    public function update_artisan_task($data_edit,$where)
    {
      $tablename = "project_tasks";

      $this->db->set($data_edit);

      $this->db->where($where);

      $query  = $this->db->update($tablename);
      
      $result = $this->db->affected_rows(); 
        
      return(($result > 0) ? true : false);     
    }

    /***********************************************
      Update Artisan's Task
    ************************************************/
    public function delete_task($deleteid)
    {
      $tablename = "project_tasks";

      $this->db->where('id',$deleteid);
        
      $query = $this->db->delete($tablename);
          
      $result = $this->db->affected_rows();
                  
      return (($result > 0) ? true : false );    
    }

  /******************************** Data Insertion ******************************************/  

  /******************************** Data Update    ******************************************/  
    /***********************************************
      Activate/Deactivate Project Phase
    ************************************************/
    public function activate_deactivate_phase($phaseid,$status) 
    {
      $tablename = "project_phases";

      $this->db->set('status',$status);

      $this->db->where('id',$phaseid);

      $query  = $this->db->update($tablename);
      
      $result = $this->db->affected_rows(); 
        
      return(($result > 0) ? true : false);     
    }

    /***********************************************
      Task Complete
    ************************************************/
    public function task_completed($taskid,$status) 
    {
      $tablename = "project_tasks";

      if($status)
        $this->db->set('status_date',gmdate('Y-m-d H:i:s')); 
      else       
        $this->db->set('status_date',''); 

      $this->db->set('status',$status);

      $this->db->where('id',$taskid);

      $query  = $this->db->update($tablename);
      
      $result = $this->db->affected_rows(); 
        
      return(($result > 0) ? true : false);     
    }

  /******************************** Data Update    ******************************************/
  
}//End of class
