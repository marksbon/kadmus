<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {
	
	/************************************ Constructor / Logout ******************************/
	/*******************************
		Constructor 
	*******************************/

	public function index() {

			#Redirect to Dashboard
			redirect('Dashboard');
	}
    
	/***************************************	Interfaces 	***********************************/
    
    /***********************************************
			Charts Of Account
	************************************************/

	public function Charts_Of_Account() {
		
		//Checking For Permission
		if ( isset($_SESSION['username']) && in_array('New Stock',$_SESSION['rows_exploded'])) {
            # Loading models...
            $this->load->model('UserModel'); /*Needed By header, nav*/
            $this->load->model('Retrieval');
            
            # Loading Functions
            $data['suppliers_info'] = $this->Retrieval->All_Info('suppliers');
            
            /********** Interface ***********************/    
            $headertag['title'] = "Charts Of Accounts";
            $this->load->view('headtag',$headertag);
            $this->load->view('header');
            $this->load->view('nav');
            $this->load->view('account/..');
            $this->load->view('account',$data);
            $this->load->view('footer');
            /********** Interface ***********************/
		
		} else {
			# code...
			//loading login view
			redirect('Dashboard');
		}
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
			Purchase order
		************************************************/
		public function Purchase_Order() 
		{
			if(isset($_SESSION['username']))
			{
				if(in_array('Inc. Requests',$_SESSION['rows_exploded'])) 
				{
	        # Loading models...
	        $this->load->model('Model_Access'); /*Needed By header, nav*/
	        $this->load->model('Universal_Retrieval');
	            
	        /********** Interface ***********************/    
	        $headertag['title'] = "Purchase Order";
	        $this->load->view('headtag',$headertag);
	        $this->load->view('header');
	        $this->load->view('nav');
	        $this->load->view('account/purchaseorder');
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
				redirect('Access');
			}
		}    

}//End of Class
