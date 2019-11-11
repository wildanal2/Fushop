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
			}else if ($session_data['level']==5) {
				redirect('AdminPemesanan','refresh');
			} else if ($session_data['level']==4) {
				redirect('AdminProduksi','refresh');
			} 
		}else {

			// $data['barang'] = $this->TransaksiCustomer_model->get_all_barang();
			$this->load->view('customer/home');
		}   
	} 


	// show transaksi 
	// public function getTransaksi()
	// {
	// 	$session_data = $this->session->userdata('sik_logged'); 
	// 	echo json_encode($this->TransaksiCustomer_model->get_all_transaksi($session_data['id_user']));
	// }

	// public function getTransaksidetail()
	// {
	// 	echo json_encode($this->TransaksiCustomer_model->getTransaksidetail($this->input->post('id_t')));
	// }

	// public function getInvoiceJumlah()
	// {
	// 	echo json_encode($this->TransaksiCustomer_model->getjumlahinv($this->input->post('inv_id')));
	// }

	// public function paketSampai()
	// {
		// echo json_encode($this->TransaksiCustomer_model->produk_sampai());
	// }

	public function getListProductHome()
	{
		$data = $this->Product_model->productAllHome();
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
