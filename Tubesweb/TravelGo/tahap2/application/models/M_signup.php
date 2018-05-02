<?php 
 
class M_signup extends CI_Model{
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}?>