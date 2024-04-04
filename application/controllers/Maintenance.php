<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller {
    
    # G - Gender
    # R - Rank
    # A - Age - Above All, You can never claim the panyin from him. hahaha
    # P - Power
    # D - Distance  - Personal Intimacy
	
	/************************************ Constructor ******************************/
  	/*******************************
  		    Stores Index 
  	*******************************/
  	public function index() 
    {
  		# Permission Check
      if ( isset($_SESSION['username']) &&  (strcasecmp($_SESSION['groupname'], "System Developers") == 0)  )
      {
        if(true) 
        	redirect('Maintenance/Dashboard');
        
        else
          redirect('Dashboard');
      }
      
      else
        redirect('Access');
  	}
    
	/***************************************	Interfaces 	***********************************/
    /***************************************
			   Dashboard
    ***************************************/
    public function Dashboard() 
    {
		  if ( isset($_SESSION['username']) )
      {
        if ( in_array('Maintenance',$_SESSION['rows_exploded']) ) 
        {
          # Loading models...
          $this->load->model('UserModel'); /* Needed By header, nav */
          $this->load->model('Retrieval');

          $this->load->view('dashboard');
          $this->load->view('footer');
		    } 
        else 
        {
          # No Permission
          $this->session->set_flashdata('error','Permission Denied. Contact Administrator');
          redirect('Dashboard');
		    }
      }
      else
      {
        # redirect to Dashboard
        redirect('Dashboard');
      }
    }
  /***************************************  Interfaces  ***********************************/

}//End of Class
