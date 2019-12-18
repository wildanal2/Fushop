<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class products extends CI_Controller {
 
 	public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('Product_model'); 
	 }

	public function p($id)
	{
		// $id = $this->input->post('id');
		$p = $this->Product_model->productDetailId($id); 
		$photo = $this->Product_model->productPhoto($p->kd_barang); 

		//jika dia login
		if ($this->session->userdata('sik_logged')) {
			$sdata = $this->session->userdata('sik_logged');
			
			$lstfav = $this->Product_model->listfavbyid($sdata['id_user']);
			$p->isfav = false;
			foreach ($lstfav as $favv) {
				if ($p->kd_barang == $favv->idproduk) {
					$p->isfav = true;
				} 
			}
		} 

		// $seller = 
		$data['product'] = $p;
		$data['foto'] = $photo;	
		

		$this->load->view('customer/detail_product', $data);
	}

	public function newproduct()
	{ 
		date_default_timezone_set("Asia/Jakarta"); 
		$output = array('error' => false);
		$new_name = date("Y-m-d-H-i-s");//new name

		$config['upload_path']="./assets/images/products"; //path folder file upload
		$config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
		$config['file_name'] = $new_name;  //set name
		$this->load->library('upload', $config); //call library upload

		if ($this->upload->do_upload("file")){ //upload file 
 
            $path = $_FILES['file']['name'];
            $ext = pathinfo($path, PATHINFO_EXTENSION);
			$source =  "products/".$new_name.".".$ext;  //set file name ke variable image 
			//Sukses

			$produ = array(
					'nama_barang' => $this->input->post('nampro'),
					'deskripsi' => $this->input->post('sortprod'),
					'longdeskripsi' => $this->input->post('deskripprod'),
					'berat' => $this->input->post('berat'),
					'harga' => $this->input->post('harga'),
					'shop_id' => $this->input->post('merk'),
					'id_category' => $this->input->post('kateg')
				);
			$prod = $this->Product_model->newproduk($produ);
			if ($prod) { 
				$dfoto = array(
							'fotoid' => $prod,
							'source' => $source,
							'tag' => $this->input->post('tag')
						);
				$this->Product_model->newfotoproduk($dfoto);
				$output['id'] = $prod; 
			}else{
				$output['error'] = true;
			}
		}  

		echo json_encode($output);
	}
	/// == GET PRODD  == \\\
	public function getProd()
	{
		// $output = $this->input->post('id');
		$output = $this->Product_model->productAllAdmin();

		echo json_encode($output);	
	}



	///  ==== FEatuRE. =====. \\\
	public function getFavData()
	{
		$id = $this->input->post('id');
		$output = $this->Product_model->listprodfav($id);

		echo json_encode($output);	
	}
	public function addfav()
	{
		$output = array('error' => false);		

		$fav = array(
					'iduser' => $this->input->post('usr'),
					'idproduk' => $this->input->post('prod')
				);
		$prod = $this->Product_model->newFav($fav);
		if ($prod) {
			 
		}else{
			$output['error'] = true;
		}
		echo json_encode($output);
	}
	public function removefav(){
		$output = array('error' => false);

		$fav = $this->Product_model->removeFav( $this->input->post('idf'));
		if ($fav) {
			 
		}else{
			$output['error'] = true;
		}
		echo json_encode($output);
	}

}