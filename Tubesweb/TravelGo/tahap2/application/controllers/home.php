<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->model('M_login');
		$this->load->library('session');
		/*if (!$this->session->userdata('email')) {
            redirect('home');
        }*/
		
	}

	public function index(){	
		$ms['action'] = ('home/login');
		$this->load->view('home',$ms);
	}

	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$hasil =$this->M_login->masuk_login($email,$password);
		if ($hasil['user']>0) {
			$this->session->set_userdata('email', $email);
			echo "<script>alert('Berhasil')</script>";
			redirect('homelogin','refresh');
		}else{				
			echo "<script>alert('Maaf email atau password yang dimasukan salah')</script>";			
			redirect('home','refresh');
		}
	}


	}
?>