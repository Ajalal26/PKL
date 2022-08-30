<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index(){

		$data = $this->db->get('tb_kategori')->result_array();


		$this->load->view('barang/kategori',array(
			'data'=>$data
		));
	}

	public function save(){
		$valid = $this->db->insert('tb_kategori',$_POST);

		echo($valid ? "Data berhasil disimpan" : "Terjadi Kesalahan");
	}


	public function edit($id){
		$data = $this->db->get_where('tb_kategori',array(
			'ID'=>$id
		))->result_array()[0];

		print_r(json_encode($data));
	}

	public function update($id){
		$valid = $this->db->update('tb_kategori',$_POST,array(
			'ID'=>$id
		));

		echo($valid ? "Data berhasil diupdate" : "Terjadi Kesalahan");
	}

	public function delete($id){
		$valid = $this->db->delete('tb_kategori',array(
			'ID'=>$id
		));
		echo($valid ? "Data berhasil dihapus" : "Terjadi Kesalahan");
	}
}
