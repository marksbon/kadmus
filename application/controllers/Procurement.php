<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procurement extends CI_Controller 
{
	/************************************ Constructor / Logout ******************************/
		/*******************************
			Constructor 
		*******************************/
		public function index() 
		{
			redirect('init');
		}

	/************************************ Constructor / Logout ******************************/
    
	/***************************************	Interfaces 	***********************************/
    /***********************************************
			Incoming Requests
		************************************************/
		public function Requests() 
		{
			if(isset($_SESSION['username']))
			{
				if(in_array('Process Requests',$_SESSION['rows_exploded'])) 
				{
	        # Loading models...
	        $this->load->model('Model_Access'); /*Needed By header, nav*/
	        $this->load->model('Universal_Retrieval');
	            
	        /********** Interface ***********************/    
	        $headertag['title'] = "Requests";
	        $this->load->view('headtag',$headertag);
	        $this->load->view('header');
	        $this->load->view('nav');
	        $this->load->view('procurement/allrequests');
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
 /***********************************************
			Incoming Requests
		************************************************/
		public function Requests_details() 
		{
			if(isset($_SESSION['username']))
			{
				if(in_array('Process Requests',$_SESSION['rows_exploded'])) 
				{
	        # Loading models...
	        $this->load->model('Model_Access'); /*Needed By header, nav*/
	        $this->load->model('Universal_Retrieval');
	            
	        /********** Interface ***********************/    
	        $headertag['title'] = "Requests";
	        $this->load->view('headtag',$headertag);
	        $this->load->view('header');
	        $this->load->view('nav');
	        $this->load->view('procurement/requstdetail');
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

		/***********************************************
			Purchase order
		************************************************/
		public function Purchase_Order() 
		{
			if(isset($_SESSION['username']))
			{
				if(in_array('Process Requests',$_SESSION['rows_exploded'])) 
				{
	        # Loading models...
	        $this->load->model('Model_Access'); /*Needed By header, nav*/
	        $this->load->model('Universal_Retrieval');
	            
	        /********** Interface ***********************/    
	        $headertag['title'] = "Purchase Order";
	        $this->load->view('headtag',$headertag);
	        $this->load->view('header');
	        $this->load->view('nav');
	        $this->load->view('store/purchaseorder');
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
		/***********************************************
			Purchase order
		************************************************/
		public function Vehicle_Policy() 
		{
			if(isset($_SESSION['username']))
			{
				if(in_array('Process Requests',$_SESSION['rows_exploded'])) 
				{
	        # Loading models...
	        $this->load->model('Model_Access'); /*Needed By header, nav*/
	        $this->load->model('Universal_Retrieval');
	            
	        /********** Interface ***********************/    
	        $headertag['title'] = "Vehicle Policy";
	        $this->load->view('headtag',$headertag);
	        $this->load->view('header');
	        $this->load->view('nav');
	        $this->load->view('procurement/vehiclepolicy');
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
		/***********************************************
			services
		************************************************/
		public function Services() 
		{
			if(isset($_SESSION['username']))
			{
				if(in_array('Process Requests',$_SESSION['rows_exploded'])) 
				{
	        # Loading models...
	        $this->load->model('Model_Access'); /*Needed By header, nav*/
	        $this->load->model('Universal_Retrieval');
	            
	        /********** Interface ***********************/    
	        $headertag['title'] = "Purchase Order";
	        $this->load->view('headtag',$headertag);
	        $this->load->view('header');
	        $this->load->view('nav');
	        $this->load->view('procurement/service');
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
			/***********************************************
			services
		************************************************/
		public function purchases() 
		{
			if(isset($_SESSION['username']))
			{
				if(in_array('Process Requests',$_SESSION['rows_exploded'])) 
				{
	        # Loading models...
	        $this->load->model('Model_Access'); /*Needed By header, nav*/
	        $this->load->model('Universal_Retrieval');
	            
	        /********** Interface ***********************/    
	        $headertag['title'] = "Purchase Order";
	        $this->load->view('headtag',$headertag);
	        $this->load->view('header');
	        $this->load->view('nav');
	        $this->load->view('procurement/purchases');
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
    /***********************************************
			Approvals
		************************************************/
		public function Approvals() 
		{
			if(isset($_SESSION['username']))
			{
				if(in_array('Approvals',$_SESSION['rows_exploded'])) 
				{
	        # Loading models...
	        $this->load->model('Model_Access'); /*Needed By header, nav*/
	        $this->load->model('Universal_Retrieval');
	            
	        # Loading Functions
	        $data['suppliers_info'] = $this->Universal_Retrieval->All_Info('product_suppliers');
	            
	        /********** Interface ***********************/    
	        $headertag['title'] = "Approvals";
	        $this->load->view('headtag',$headertag);
	        $this->load->view('header');
	        $this->load->view('nav');
	        $this->load->view('procurement/approval',$data);
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

	/***************************************	Interfaces 	***********************************/

}//End of Class
