<?php

class fungsi {
    protected $ci;

    function __construct() {
        $this->ci =& get_instance();
    }

    function user_login(){
        $this->ci->load->model('Mdl_user');
        $user_id = $this->ci->session->userdata('id_user');
        $user_data = $this->ci->Mdl_user->get($user_id)->row();
        return $user_data;
    }
}