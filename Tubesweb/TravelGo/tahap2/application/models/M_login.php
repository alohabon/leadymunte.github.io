<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function masuk_login($email,$password) {
        $query = $this->db->query("select count(*) as user from signup"." where email='$email' and password='$password'");
        return $query->row_array();
    }
    public function username($email,$password){
    	$query = $this->db->query("select fname from signup"." where email='$email' and password='$password'");
    	return $query->result();
    }	
}