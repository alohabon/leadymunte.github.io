<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class homelogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		/*$this->load->model('M_login');
		$this->load->library('session');*/
		
	}

	public function index(){	
		$this->load->view('homelogin');
	}

	function logout(){
		$this->session->sess_destroy();
		echo "<script>alert('Logout Berhasil')</script>";
    	redirect('home','refresh');
	}


	}
?>