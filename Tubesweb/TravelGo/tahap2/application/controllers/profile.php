<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class profile extends CI_Controller	{
		
	public function __construct()
		{
			parent::__construct();
			$this->load->helper('html');
			$this->load->model('M_profile');
			$this->load->library('session');
		}
		public function index(){
			$aksi['action'] = ('profile/update');
			$this->load->view('profile',$aksi);
		}
		public function update()
		{
			$data = $this->input->post(null,TRUE);
			$update = $this->M_profile->update_data($data);
			if($update){
				$this->session->set_flashdata('alert', 'sukses_edit');
            	redirect('profile/index');
			}
			else{
            echo "<script>alert('Gagal Edit Data');</script>";
        	}
		}

}
?>