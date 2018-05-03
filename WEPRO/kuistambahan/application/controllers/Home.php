<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('m_home');
	}

	public function index(){
		$data['barang'] = $this->m_home->getData('barang');
		$this->load->view('home', $data);
	}

	public function penjualan(){
		$data['penjualan'] = $this->m_home->getDataPenjualan();
		$data['barang'] = $this->m_home->getData('barang');
		$this->load->view('penjualan', $data);
	}

	public function tambah_barang(){
		if($_REQUEST){
			$data = array(
				'kbarang' => $this->input->post('kbarang'),
				'nbarang' => $this->input->post('nbarang'),
				'harga' => $this->input->post('harga')
			);

			if($this->m_home->insert('barang', $data)){
				redirect('/');
			}
		}
	}

	public function delete_barang($kode){
		if($this->m_home->delete('barang', 'kbarang', $kode)){
			redirect('/home');
		}
	}

	public function edit_barang(){
			$data = array(
				'nbarang' => $this->input->post('nbarang'),
				'harga' => $this->input->post('harga')
			);

			if($this->m_home->update('barang', 'kbarang', $this->input->post('kbarang'), $data)){
				redirect('/');
			}
	}

	public function tambah_penjualan(){
		if($_REQUEST){
			$data = array(
				'nnota' => $this->input->post('nnota'),
				'tanggal' => $this->input->post('tanggal'),
				'kbarang' => $this->input->post('kbarang'),
				'jumlah' => $this->input->post('jumlah')
			);

			if($this->m_home->insert('penjualan', $data)){
				redirect('/home/penjualan');
			}
		}
	}

	public function delete_penjualan($kode){
		if($this->m_home->delete('penjualan', 'nnota', $kode)){
			redirect('/home/penjualan');
		}
	}

	public function edit_penjualan(){
			$data = array(
				'tanggal' => $this->input->post('tanggal'),
				'kbarang' => $this->input->post('kbarang'),
				'jumlah' => $this->input->post('jumlah')
			);

			if($this->m_home->update('penjualan', 'nnota', $this->input->post('nnota'), $data)){
				redirect('/home/penjualan');
			}
	}


}
