<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function getData($table){
		return $this->db->get($table);
	}

	public function insert($table, $data){
		return $this->db->insert($table, $data);
	}

	public function delete($table, $field, $kode){
		$this->db->where($field, $kode);
		return $this->db->delete($table);
	}

	public function update($table, $field, $value, $data){
		$this->db->where($field, $value);
		return $this->db->update($table, $data);
	}

	public function getDataPenjualan(){
		$this->db->join('barang', 'penjualan.kbarang = barang.kbarang');
		return $this->db->get('penjualan');
	}

}
