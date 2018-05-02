<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class bookingb extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->model('M_booking');
		$this->load->library('session');
	}

	public function index()
	{	
		/*$tgl_brkt = $this->input->post('tanggal_berangkat');
		$data = array('hasil' => $this->M_booking->cari($tgl_brkt));*/
		$ms['action'] = ('bookingb/login');
		$this->load->view('bookingb',$ms);
	}
	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$hasil =$this->M_booking->masuk_login($email,$password);
		if ($hasil['user']>0) {
			$this->session->set_userdata('email', $email);
			echo "<script>alert('Berhasil')</script>";
			redirect('booking','refresh');
		}else{				
			echo "<script>alert('Maaf email atau password yang dimasukan salah')</script>";			
			redirect('bookingb','refresh');
		}
	}
}
?>