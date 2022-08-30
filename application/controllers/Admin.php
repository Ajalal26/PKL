<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
        //$this->output->set_header('Access-Control-Allow-Origin: *');
        // if($this->session->userdata('status_login') != true){
        //     redirect(base_url("Login"));
        // }
        date_default_timezone_set("Asia/Jakarta");
    }

	public function index(){
		$this->load->view('admin/index');
	}


}
