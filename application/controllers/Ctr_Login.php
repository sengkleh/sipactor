<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctr_Login extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
	}

    public function proseslogin(){
        $post = $this->input->post(null, TRUE);

        //ambil dari nama submit login
        if(isset($post['file_user'])){
            echo "proses login";
        }

    }
}
