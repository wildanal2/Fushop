<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCustomer extends CI_Controller {
 
 	public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('Product_model'); 
	 }

	public function index()
	{
		if ($this->session->userdata('sik_logged')) {
			$session_data = $this->session->userdata('sik_logged');
			
			if ($session_data['level']==1) { 
				$this->load->view('customer/home');
			}else if ($session_data['level']==3) {
				$this->load->view('admin/home');
			} else if ($session_data['level']==4) {
				redirect('AdminProduksi','refresh');
			} 
		}else {

			// $data['barang'] = $this->TransaksiCustomer_model->get_all_barang();
			$this->load->view('customer/home');
		}   
	} 
 
	public function getListProductHome()
	{	
		$data = $this->Product_model->productAllHome();

		if ($this->session->userdata('sik_logged')) {
			$sdata = $this->session->userdata('sik_logged');
			
			$lstfav = $this->Product_model->listfavbyid($sdata['id_user']);
			if ( count($lstfav) > count($data) ) {
				//
				foreach ($data as $key) {$key->isfav = false;}
				
				foreach($data as $prod){ 
					foreach ($lstfav as $favv) {
						if ($prod->kd_barang == $favv->idproduk) {
							$prod->isfav = true;
						} 
					}
				}
			}else{
				//
				foreach ($data as $key) {$key->isfav = false;}

				foreach($lstfav as $fav){  
					foreach ($data as $key) {
						if ($key->kd_barang == $fav->idproduk) {
							$key->isfav = true;
						}
					}
				}
			}
		}
		
		echo json_encode($data);
	}



	// Cartt
	function add_to_cart(){ //fungsi Add To Cart
        $data = array(
            'id' => $this->input->post('produk_id'), 
            'name' => $this->input->post('produk_nama'), 
            'price' => $this->input->post('produk_harga'), 
            'qty' => $this->input->post('quantity'), 
        );
        $this->cart->insert($data);
    }
  	
  	function hapus_cart(){ //fungsi untuk menghapus item cart
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data); 
    }

}
