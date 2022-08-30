<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        //$this->output->set_header('Access-Control-Allow-Origin: *');
        //$this->load->model('Mymodel');

    }

	public function index(){
		$this->load->view('admin/splashing');
	}

	public function login_page(){
		$this->load->view('login');
	}

	function aksi_login(){
        $cek = $this->db->get_where('tb_user',array(
            'nama_panggilan'=>$_POST['username'],
            'password'=>md5($_POST['password'])
        ))->result_array();

        $cek2 = $this->db->get_where('tb_user',array(
            'id_member'=>$_POST['username'],
            'password'=>md5($_POST['password'])
        ))->result_array();


        // $cek3 = $this->db->get_where('tb_ptk',array(
        //     'email'=>$_POST['username'],
        //     'password'=>md5($_POST['password'])
        // ))->result_array();

        // $cek4 = $this->db->get_where('tb_identitas_siswa',array(
        //     'email'=>$_POST['username'],
        //     'password'=>md5($_POST['password'])
        // ))->result_array();

            //print_r($cek);
        if($cek){
            
            $this->session->set_userdata($cek[0]);
            $this->session->set_userdata(array(
                'status_login'=>true
            ));
            redirect(base_url("Admin"));
            //echo $this->session->userdata('id_status');
        }else if($cek2){
            $this->session->set_userdata($cek2[0]);
            $this->session->set_userdata(array(
                'status_login'=>true
            ));
            redirect(base_url("Admin"));
        }else{
            $this->session->set_flashdata('message', 'Password atau Username Salah!');
            redirect(base_url('Login/login_page'));
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}
