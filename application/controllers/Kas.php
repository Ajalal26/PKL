<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kas extends CI_Controller {

	public function index(){

		$data = $this->db->get('tb_kas')->result_array();


		$this->load->view('kas/index',array(
			'data'=>$data
		));
	}

	public function save(){
		$valid = $this->db->insert('tb_kas',$_POST);

		if($valid){
			echo "Data berhasil disimpan";
		}else{
			echo "Terjadi kesalahan";
		}
	}


	public function edit($id){
		$data = $this->db->get_where('tb_kas',array(
			'ID'=>$id
		))->result_array()[0];

		print_r(json_encode($data));
	}

	public function update($id){
		$valid = $this->db->update('tb_kas',$_POST,array(
			'ID'=>$id
		));

		if($valid){
			echo "Data berhasil diupdate";
		}else{
			echo "Terjadi kesalahan";
		}
	}

	public function delete($id){
		$valid = $this->db->delete('tb_kas',array(
			'ID'=>$id
		));

		if($valid){
			echo "Data berhasil dihapus";
		}else{
			echo "Terjadi kesalahan";
		}

	}
}
