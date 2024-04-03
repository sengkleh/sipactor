<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_user extends CI_Model {

	public function get($id = null){
		$this->db->from('file_user');
		if($id != null) {
			$this->db->where('id_user', $id);
		}
		$query = $this->db->get();
		return $query;
	}

    //proess tambah data user
	public function tambahuser($post){
		$parem['username'] 	= $post['username'];
		$parem['email'] 	= $post['email'];
		$parem['password']	= sha1 ($post['password']);
		$parem['telepon']	= $post['telepon'];
		$parem['level'] 	= $post['level'];

		$this->db->insert('file_user', $parem);
	}

}