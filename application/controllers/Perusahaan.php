<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	// function __construct(){
    //     parent::__construct();
    //     //$this->output->set_header('Access-Control-Allow-Origin: *');
    //     // if($this->session->userdata('status_login') != true){
    //     //     redirect(base_url("Login"));
    //     // }
    //     date_default_timezone_set("Asia/Jakarta");
    // }

	public function index(){
		// $this->db->select('tb_perusahaan.*, tb_user.nama_lengkap ');
		// $this->db->join('tb_user', 'tb_user.ID = tb_perusahaan.nama_lengkap', 'LEFT');
		$this->db->select('tb_perusahaan.*, tb_user.* ');
		$this->db->join('tb_user', 'tb_user.ID = tb_perusahaan.nama_lengkap', 'LEFT');
		$data = $this->db->get('tb_perusahaan')->result_array();


		$this->load->view('admin/perusahaan/index',array(
			'data'=>$data
		));
	}
	
	public function save(){
				$file = '';
	
		if($_FILES['pp']['name']!='' || $_FILES['pp']['name']!=null){
			$source = $_FILES['pp']['tmp_name'];
			$dest = 'tmp/foto/';
			$fileName = changeFileName($_FILES['pp']['name'],'FK-');

			$upload = uploadFile($source,$dest.$fileName,false);

			if($upload){
				$file = $fileName;
			}

		}


		$_POST = array_merge_recursive($_POST,array(
			'pp'=>$file
		));
		$valid = $this->db->insert('tb_perusahaan',$_POST);

		echo($valid ? "Data berhasil disimpan" : "Terjadi Kesalahan");
	}



	public function edit($id){
		$data = $this->db->get_where('tb_perusahaan',array(
			'ID'=>$id
		))->result_array()[0];

		print_r(json_encode($data));
	}

	public function update($id){
		$valid = $this->db->update('tb_perusahaan',$_POST,array(
			'ID'=>$id
		));

		if($valid){
			echo "Data berhasil diupdate";
		}else{
			echo "Terjadi kesalahan";
		}
	}

	public function delete($id){
		$valid = $this->db->delete('tb_perusahaan',array(
			'ID'=>$id
		));

		if($valid){
			echo "Data berhasil dihapus";
		}else{
			echo "Terjadi kesalahan";
		}

	}
}
