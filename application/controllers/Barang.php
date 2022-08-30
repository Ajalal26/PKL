<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index(){
		$this->db->select('tb_barang.*, tb_kategori.nama_kategori as kategori');
		$this->db->join('tb_kategori', 'tb_kategori.ID = tb_barang.kategori_barang', 'LEFT');
		$this->db->select('tb_barang.*, tb_supplier.nama_supplier as supplier');
		$this->db->join('tb_supplier', 'tb_supplier.ID = tb_barang.supplier', 'LEFT');
		$data = $this->db->get('tb_barang')->result_array();


		$this->load->view('barang/barang',array(
			'data'=>$data
		));
	}

	public function save(){
		// Upload Foto
		$file = '';
	
		if($_FILES['foto_barang']['name']!='' || $_FILES['foto_barang']['name']!=null){
			$source = $_FILES['foto_barang']['tmp_name'];
			$dest = 'tmp/foto/';
			$fileName = changeFileName($_FILES['foto_barang']['name'],'FK-');

			$upload = uploadFile($source,$dest.$fileName,false);

			if($upload){
				$file = $fileName;
			}

		}


		$_POST = array_merge_recursive($_POST,array(
			'foto_barang'=>$file
		));

		$valid = $this->db->insert('tb_barang',$_POST);
		
		echo($valid ? "Data Berhasil Disimpan" : "Terjadi Kesalahan");

			
	}


	public function edit($id){
		$data = $this->db->get_where('tb_barang',array(
			'ID'=>$id
		))->result_array()[0];

		print_r(json_encode($data));
	}

	public function update($id){
		$valid = $this->db->update('tb_barang',$_POST,array(
			'ID'=>$id
		));

		if($valid){
			echo "Data berhasil diupdate";
		}else{
			echo "Terjadi kesalahan";
		}
	}

	public function delete($id){
		$valid = $this->db->delete('tb_barang',array(
			'ID'=>$id
		));

		if($valid){
			echo "Data berhasil dihapus";
		}else{
			echo "Terjadi kesalahan";
		}

	}
}
