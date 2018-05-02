<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class signup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->model('M_signup');
		$aksi['action'] = ('signup/add');
		$this->load->view('v_SignUp', $aksi);
		
	}

	public function index()
	{	
		
	}
	function add(){
		$fname = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirmpass = $this->input->post('confirmpassword');
		$phnumber = $this->input->post('phonenumber');
		if ($fname != '' && $email != '' && $password != '' && $confirmpass != '' && $phnumber != '') {
			$data = array(
                'fname' => $fname,
                'email' => $email,
                'password' => $password,
                'cpassword' => $confirmpass,
                'pnumber' => $phnumber
            );
            $this->M_signup->input_data($data,'signup');
            echo "<script>alert('Registrasi berhasil')</script>";
            redirect('login','refresh');
		}

	}

}
?>