<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// function __construct(){
    //     parent::__construct();
    //     //$this->output->set_header('Access-Control-Allow-Origin: *');
    //     // if($this->session->userdata('status_login') != true){
    //     //     redirect(base_url("Login"));
    //     // }
    //     date_default_timezone_set("Asia/Jakarta");
    // }
	public function index(){
		// $this->db->select('tb_barang.*, tb_kategori.nama_kategori as kategori');
		// $this->db->join('tb_kategori', 'tb_kategori.ID = tb_barang.kategori_barang', 'LEFT');
		// $this->db->select('tb_barang.*, tb_supplier.nama_supplier as supplier');
		// $this->db->join('tb_supplier', 'tb_supplier.ID = tb_barang.supplier', 'LEFT');
		$data = $this->db->get('tb_user')->result_array();


		$this->load->view('admin/perusahaan/user',array(
			'data'=>$data
		));
	}

	public function save(){
		$valid = $this->db->insert('tb_user',$_POST);

		echo($valid ? "Data berhasil disimpan" : "Terjadi Kesalahan");
	}



	public function edit($id){
		$data = $this->db->get_where('tb_user',array(
			'ID'=>$id
		))->result_array()[0];

		print_r(json_encode($data));
	}

	public function update($id){
		$valid = $this->db->update('tb_user',$_POST,array(
			'ID'=>$id
		));

		if($valid){
			echo "Data berhasil diupdate";
		}else{
			echo "Terjadi kesalahan";
		}
	}

	public function delete($id){
		$valid = $this->db->delete('tb_user',array(
			'ID'=>$id
		));

		if($valid){
			echo "Data berhasil dihapus";
		}else{
			echo "Terjadi kesalahan";
		}

	}
}
