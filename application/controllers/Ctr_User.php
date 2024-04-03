<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctr_User extends CI_Controller {

	//function __construct(){
		//parent :: __construct();
		//fungsi sebelum login difolder helper
		//check_not_login();
		//user_login();
		//$this->load->model('Mdl_user');
		// form validasi ada di library form_validasi
		//$this->load->library('form_validation');
		
	//}
	
	public function index()
	{

		$this->load->model('Mdl_User');
		$data['row'] = $this->Mdl_User->get();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('test',$data);
		$this->load->view('template/footer');
		
	}

	public function add(){
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('users/add_user');
		$this->load->view('template/footer');
	}

	
}