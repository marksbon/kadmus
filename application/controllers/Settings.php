<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	
	/***********************************************
		Constructor + Initialization
	************************************************/

	public function index() 
	{
		$this->General();
	}

	/***********************************************
				System Settings
	************************************************/
    
    public function Settings() {
		
		//loading register view

		if (isset($_SESSION['username']) && !empty($_SESSION['jobtitle'])) {
			# code...
			//loading model and functions
			$this->load->model('user_model');

			$title['title'] = "Settings";
			//$data['user'] = $_SESSION['username'];
			$this->load->view('header_view',$title);
			$this->load->view('system_settings',$data);
			$this->load->view('footer_view');
		
		} else {
			# code...
			//loading login view
			redirect('Access/Login');
		}
	}

	public function Register_Company() {
		
		if(isset($_POST['Register'])) {
			
		//Setting validation rules
			$this->load->library('form_validation');
			$this->form_validation->set_rules('comp_name','Company Name','required|trim|xss_clean');
			$this->form_validation->set_rules('comp_tel1','Telephone No 1','required|trim|xss_clean');
			$this->form_validation->set_rules('comp_email','Password','required|trim|xss_clean');
			$this->form_validation->set_rules('comp_tel2','Telephone No 2','trim|required');
			$this->form_validation->set_rules('comp_fax','Fax Number','trim|required');
			$this->form_validation->set_rules('comp_logo','Company Logo','required|trim|xss_clean');
			$this->form_validation->set_rules('comp_address','Address','required|trim|xss_clean');

		//Merging names and creating array
			$fullname = ucfirst($surname)." ".ucfirst($othernames);
			
			$data['comp_name'] 	 = $this->input->post('comp_name');
			$data['comp_tel1']   = $this->input->post('comp_tel1');;
			$data['comp_tel2'] 	 = $this->input->post('comp_tel2');
			$data['comp_fax']    = $this->input->post('comp_fax');
			$data['comp_email']  = $this->input->post('comp_email');
			$data['comp_address']= $this->input->post('comp_address');
			
            //renaming uploaded file
			$filename 			= str_replace(" ", "_", $comp_name);
			$imgpath 			= explode(".", $comp_logo);
			$Newfilename		= $filename.".".$imgpath[1];
			$data['comp_logo'] 	= base_url()."resources/uploads/".$Newfilename;

		//loading model register
			$this->load->model('setting_model');
		
		//Registering User
			$result = $this->setting_model->register_comp($data);
			
			if($result) {
				
				redirect('Settings/');
			}
				
			else {
					
				$_SESSION['newuser'] = "Failed";
				redirect('Users');
			}
		}
		
		else {
					
				echo "Register Button Not Clicked";
				$this->register();
			}
	}

	

}//End of Class
