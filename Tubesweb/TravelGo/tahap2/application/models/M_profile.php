<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {
		public function __construct() {         
		$this->load->database();     
	}   
	/*public function update_data($email,$signup){
		$this->db->where('email', $email);
		return $this->db->update('signup', $signup);
	}*/
	public function update_data($data){
		$table = 'signup';
		$parm = array(
			"fname"=>$data['fname'],
			"email"=>$data['email'],
			"password"=>$data['password'],
			"cpassword"=>$data['cpassword'],
			"pnumber"=>$data['pnumber'],
		);
		$this->db->where('email', $data['email']);
		$edit = $this->db->update($table,$parm);
		if($edit){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}