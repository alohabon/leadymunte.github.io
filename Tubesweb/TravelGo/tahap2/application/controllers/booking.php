<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->model('M_booking');
		$this->load->library('session');
	}

	public function index()
	{	
		$tgl_brkt = $this->input->post('tanggal_berangkat');
		$data = array('hasil' => $this->M_booking->cari($tgl_brkt));
		$this->load->view('booking',$data);
	}
	function logout(){
		$this->session->sess_destroy();
		echo "<script>alert('Logout Berhasil')</script>";
    	redirect('bookingb','refresh');
	}
}
?>