<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function index(){

		$data = $this->db->get('tb_supplier')->result_array();


		$this->load->view('supplier/supplier',array(
			'data'=>$data
		));
	}

	public function save(){
		$valid = $this->db->insert('tb_supplier',$_POST);

		echo($valid ? "Data berhasil disimpan" : "Terjadi Kesalahan");
	}


	public function edit($id){
		$data = $this->db->get_where('tb_supplier',array(
			'ID'=>$id
		))->result_array()[0];

		print_r(json_encode($data));
	}

	public function update($id){
		$valid = $this->db->update('tb_supplier',$_POST,array(
			'ID'=>$id
		));

		echo($valid ? "Data berhasil diupdate" : "Terjadi Kesalahan");
	}

	public function delete($id){
		$valid = $this->db->delete('tb_supplier',array(
			'ID'=>$id
		));

		echo($valid ? "Data berhasil dihapus" : "Terjadi Kesalahan");

	}
}
