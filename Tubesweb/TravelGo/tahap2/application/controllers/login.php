<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->model('M_login');
		$this->load->library('session');
		
	}

	public function index()
	{	
		$ms['action'] = ('login/masuk');
		$this->load->view('Login', $ms);
	}

	function masuk(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$hasil=$this->M_login->masuk_login($email,$password);
		if ($hasil['user']>0) {
			$this->session->set_userdata('email', $email);
			echo "<script>alert('Berhasil')</script>";
			redirect('home/index');
		}else{				
			$this->session->set_flashdata('message', 'Maaf email atau password anda salah, silahkan login kembali');			
			redirect('login','refresh');
		}
	}
}
?>