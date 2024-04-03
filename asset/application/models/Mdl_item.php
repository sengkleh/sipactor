<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_item extends CI_Model {

	public function get($id = null){
		$this->db->select('item.*, category.name as category_name, unit.name as unit_name ');
		$this->db->from('item');
		$this->db->join('category', 'category.id_category = item.id_category');
		$this->db->join('unit', 'unit.id_unit = item.id_unit');
		if($id != null) {
			$this->db->where('id_item', $id);
		}
		$query = $this->db->get();
		return $query;
	}

    public function tambahitem($post){
        $params = [
            'barcode'       => $post['item_barcode'],
			'name'          => $post['item_name'],
			'price'         => $post['item_price'],
			//item dari tabel category
			'id_category'   => $post['id_category'],
			//item dari tabel unit
			'id_unit'       => $post['unit'],
			'image'			=> $post['item_foto'],
			
        ];
        $this->db->insert('item', $params);

    }

	public function edititem($post){
        $params = [
            'barcode'       => $post['item_barcode'],
			'name'          => $post['item_name'],
			//item dari tabel category
			'id_category'   => $post['id_category'],
			//item dari tabel unit
			'id_unit'       => $post['unit'],
			'price'         => $post['item_price'],
			'update'		=> date ('Y-m-d H:i:s'),
			
        ];
		$this->db->where('id_item', $post['id_item']);
        $this->db->update('item', $params);

    }

	function check_barcode($code, $id = null){
		$this->db->from('item');
		$this->db->where('barcode', $code);
		if($id != null) {
			$this->db->where('id_item != ',$id );
		}
		$query = $this->db->get();
		return $query;
	}

    //proses hapus data user
	public function deletitem($id){
		$this->db->where('id_item', $id);
		$this->db->delete('item');
	}

}
