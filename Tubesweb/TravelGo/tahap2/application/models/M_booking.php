<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function cari($tgl_brkt) {
        $query = $this->db->query("select id_pesawat, nama_pesawat, tanggal, jamberangkat from jadwal join
									pesawat using (id_pesawat)"."where tanggal = '$tgl_brkt'");
        return $query->result();
    }
    public function masuk_login($email,$password) {
        $query = $this->db->query("select count(*) as user from signup"." where email='$email' and password='$password'");
        return $query->row_array();
    }	
}