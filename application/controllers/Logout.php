<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	/***********************************************
		Constructor + Project Deadline
	************************************************/

	public function index() 
	{	
		$this->load->model('UserModel');
		$result = $this->UserModel->logout_log($_SESSION['LoginID']);

		if ($result) {
			# code...
			session_destroy();
			redirect('');
		}

		else {
			$_SESSION['error'] = "Log Out Failed";
			redirect('Dashboard');
		}
		
	}
	
}//End of Class
