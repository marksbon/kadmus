<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Human_Resource extends CI_Controller 
{
	/************************************ Constructor / Logout ******************************/
  	/*******************************
  		Constructor 
  	*******************************/
  	public function index() 
    {
  		redirect('Dashboard');
  	}
    
	/***************************************	Interfaces 	***********************************/
    /********************************
      New Employee
    ********************************/
    public function New_Employee() 
    {
      if(isset($_SESSION['username']))
      {
        if(in_array('New Employee',$_SESSION['rows_exploded']))
        {
          # Loading models...
          $this->load->model('Model_Access'); /*Needed By header, nav*/
          $this->load->model('Universal_Retrieval');
          $this->load->helper('urlsanitize');

          /********** Interface ***********************/    
          $headertag['title'] = "New Employee";
          $this->load->view('headtag',$headertag);
          $this->load->view('header');
          $this->load->view('nav');
          $this->load->view('hr/newemployee');
          $this->load->view('footer');
          /********** Interface ***********************/
        } 
        else 
        {
          # No Permission
          $_SESSION['error'] = "Permission Denied. Contact Administrator";
          redirect('Dashboard');
        }
      }
      else
        redirect('Dashboard');
    } 

    /***********************************************
			PayRoll
	  ************************************************/

	public function PayRoll() {
		
		//Checking For Permission
		if ( isset($_SESSION['username']) && in_array('New Stock',$_SESSION['rows_exploded'])) {
            # Loading models...
            $this->load->model('UserModel'); /*Needed By header, nav*/
            $this->load->model('Retrieval');
            
            # Loading Functions
            $data['suppliers_info'] = $this->Retrieval->All_Info('suppliers');
            
            /********** Interface ***********************/    
            $headertag['title'] = "PayRoll";
            $this->load->view('headtag',$headertag);
            $this->load->view('header');
            $this->load->view('nav');
            $this->load->view('payroll',$data);
            $this->load->view('footer');
            /********** Interface ***********************/
		
		} else {
			# code...
			//loading login view
			redirect('Dashboard');
		}
	}    
  
     
  /***********************************************
      Manage Employee
  ************************************************/
  public function Manage_Employee() 
  {
    # Permission Check
    if ( isset($_SESSION['username']) )
    {
      if (TRUE) 
      {
        # Loading models...
        $this->load->model('Model_Access'); /*Needed By header, nav*/
        $this->load->model('Universal_Retrieval');
        $this->load->helper('urlsanitize');

        /********** Interface ***********************/    
        $headertag['title'] = "New Employee";
        $this->load->view('headtag',$headertag);
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('hr/Manage_Employee');
        $this->load->view('footer');
        /********** Interface ***********************/
      } 
      else 
      {
        # No Permission
        $_SESSION['error'] = "Permission Denied. Contact Administrator";
        redirect('Dashboard');
      }
    }
    else
    {
      # redirect to Dashboard
      redirect('Dashboard');
    }
  } 

  /***********************************************
      Manage Employee
  ************************************************/
  public function leave_Management() 
  {
    # Permission Check
    if ( isset($_SESSION['username']) )
    {
      if (TRUE) 
      {
        # Loading models...
        $this->load->model('Model_Access'); /*Needed By header, nav*/
        $this->load->model('Universal_Retrieval');
        $this->load->helper('urlsanitize');

        /********** Interface ***********************/    
        $headertag['title'] = "New Employee";
        $this->load->view('headtag',$headertag);
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('hr/leaveManagemet');
        $this->load->view('footer');
        /********** Interface ***********************/
      } 
      else 
      {
        # No Permission
        $_SESSION['error'] = "Permission Denied. Contact Administrator";
        redirect('Dashboard');
      }
    }
    else
    {
      # redirect to Dashboard
      redirect('Dashboard');
    }
  } 
    /***********************************************
      Organization
  ************************************************/
  public function Organization() 
  {
    # Permission Check
    if ( isset($_SESSION['username']) )
    {
      if (TRUE) 
      {
        # Loading models...
        $this->load->model('Model_Access'); /*Needed By header, nav*/
        $this->load->model('Universal_Retrieval');
        $this->load->helper('urlsanitize');

        /********** Interface ***********************/    
        $headertag['title'] = "New Employee";
        $this->load->view('headtag',$headertag);
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('hr/Organization');
        $this->load->view('footer');
        /********** Interface ***********************/
      } 
      else 
      {
        # No Permission
        $_SESSION['error'] = "Permission Denied. Contact Administrator";
        redirect('Dashboard');
      }
    }
    else
    {
      # redirect to Dashboard
      redirect('Dashboard');
    }
  } 
    /***********************************************
      Appraisal
  ************************************************/
  public function appraisal() 
  {
    # Permission Check
    if ( isset($_SESSION['username']) )
    {
      if (TRUE) 
      {
        # Loading models...
        $this->load->model('Model_Access'); /*Needed By header, nav*/
        $this->load->model('Universal_Retrieval');
        $this->load->helper('urlsanitize');

        /********** Interface ***********************/    
        $headertag['title'] = "Appraisal";
        $this->load->view('headtag',$headertag);
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('hr/appraisal');
        $this->load->view('footer');
        /********** Interface ***********************/
      } 
      else 
      {
        # No Permission
        $_SESSION['error'] = "Permission Denied. Contact Administrator";
        redirect('Dashboard');
      }
    }
    else
    {
      # redirect to Dashboard
      redirect('Dashboard');
    }
  } 
}//End of Class
