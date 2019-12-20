<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class people extends CI_Controller {
 
 	public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('Product_model'); 
	 }

	public function index()
	{ 
		$this->load->view('people/home');
	}


	public function getTransaksi(){
		$id = $this->input->post('id');
		$output = array();

		$output = $this->Product_model->listtransprod($id);
		$id = 0;
		foreach ($output as $val) {
			$dit = $this->Product_model->detaillisttransprod( $val->id );
			foreach ($dit as $key) {
				$p = $this->Product_model->detailproduk( $key->kd_barang );
				$key->nama_brg = $p->nama_barang;
			} 
			$val->data = $dit; 
		}

		echo json_encode($output );
	}

}