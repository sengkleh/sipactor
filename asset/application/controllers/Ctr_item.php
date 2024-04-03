<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctr_item extends CI_Controller {
    function __construct(){
		parent :: __construct();
		//fungsi sebelum login difolder helper
		check_not_login();
		user_login();
		$this->load->model(['Mdl_item','Mdl_category','Mdl_unit']); //penambahan load model diarray
        
	}

	//proses item
	public function index(){

        $data['row'] = $this->Mdl_item->get();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('template/navbar');
		$this->load->view('template/item/item_data', $data);
		$this->load->view('template/footer');
	}

    //proses tambah item
    public function tambahitem(){
  
        $item = new stdClass();
        $item->id_item = null;
		$item->barcode = null;
        $item->name = null;
		$item->price = null;
		$item->id_category = null;

		//cara pertama menggunakan select dicontroler
		$query_category = $this->Mdl_category->get();

		//cara kedua menggunakan select dicontroler dan harus menambahkan form di autolod helper
		$query_unit = $this->Mdl_unit->get();
		$unit[null] = '- Pilih -';
		foreach ($query_unit->result() as $key=> $unt) {
			$unit[$unt->id_unit] = $unt->name;
		}
        $data = array (
            'page'  	=> 'Tambah',
            'row'   	=> $item,
			//cara pertama menggunakan select penambahan diarray
			'category'	=> $query_category,
			//cara kedua menggunakan select penambahan di array
			'unit'		=> $unit, 'selectedunit' => null,
        );
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('template/navbar');
			$this->load->view('template/item/item_form', $data);
			$this->load->view('template/footer');
    }

	//proses edit item
	public function edititem($id){
		$query = $this->Mdl_item->get($id);
		if($query->num_rows() > 0){
			$item = $query->row();
			//cara pertama menggunakan select dicontroler
			$query_category = $this->Mdl_category->get();

			//cara kedua menggunakan select dicontroler dan harus menambahkan form di autolod helper
			$query_unit = $this->Mdl_unit->get();
			$unit[null] = '- Pilih -';
			foreach ($query_unit->result() as $key=> $unt) {
				$unit[$unt->id_unit] = $unt->name;
			}
			$data = array (
				'page'  	=> 'Update',
				'row'   	=> $item,
				//cara pertama menggunakan select penambahan diarray
				'category'	=> $query_category,
				//cara kedua menggunakan select penambahan di array
				'unit'		=> $unit, 'selectedunit' => $item->id_unit,
				
			);
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('template/navbar');
			$this->load->view('template/item/item_form', $data);
			$this->load->view('template/footer');
		}else{
			echo "<script>
					alert ('Data Tidak Ditemukan');
				  </script>";
			echo "<script>
					window.location='".site_url('Ctr_item')."';
				  </script>";
		}
	}

    public function prosess(){
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['Tambah'])){
			if($this->Mdl_item->check_barcode($post['item_barcode'])->num_rows() > 0){
				echo "<script>
					alert ('Error barcode sudah dipake');
				  </script>";

			echo "<script>
					window.location='".site_url('Ctr_item')."';
				  </script>";
			}else{
				$config['upload_path']          = './uploads/product';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
				$config['file_name']			= 'item-'.date('Ymd').'-'.substr(md5(rand()), 0,10);

				$this->load->library('uploads', $config);

				if(@$_FILES['item_image']['name'] != null ){
					if($this->upload->do_upload('item_image')){
						$post['item_image'] = $this->upload->data('file_name');
						$this->Mdl_item->tambahitem($post);
					}else{
						$error = $this->upload->display_errors();
						echo "<script>
								alert ('Error image');
							  </script>";
					}
				}else{
					if($this->upload->do_upload('item_image')){
						$post['item_image'] = $this->upload->data('file_name');
						$this->Mdl_item->tambahitem($post);
					}else{
						$error = $this->upload->display_errors();
						echo "<script>
								alert ('Error image sudah upload');
							  </script>";
					}
				}
				
			}
            
        }else 
			if(isset($_POST['Update'])){
				if($this->Mdl_item->check_barcode($post['item_barcode'], $post['id_item'])->num_rows() > 0){
					echo "<script>
						alert ('Error barcode sudah dipake');
					  </script>";
	
				echo "<script>
						window.location='".site_url('Ctr_item')."';
					  </script>";	
				}else{
					$this->Mdl_item->edititem($post);
				}            	
        }

        		
    }

    // proses hapus data item
	public function deletitem(){
		$id = $this->input->post('id_item');
		$this->Mdl_item->deletitem($id);

		if($this->db->affected_rows() > 0) {
			echo "<script>
					alert ('Data Berhasil Dihapus');
				  </script>";
		}
			echo "<script>
					window.location='".site_url('Ctr_item')."';
				  </script>";

	}
}
