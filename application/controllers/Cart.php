<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
 
 	public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('Product_model'); 
	 }

	public function index()
	{
		// if ($this->session->userdata('sik_logged')) {
		// 	$session_data = $this->session->userdata('sik_logged');
			
		// 	if ($session_data['level']==1) { 
		// 		$this->load->view('customer/home');
		// 	}else if ($session_data['level']==3) {
		// 		$this->load->view('admin/home');
		// 	} else if ($session_data['level']==4) {
		// 		redirect('AdminProduksi','refresh');
		// 	} 
		// }else {
			$this->load->view('customer/cart');
		// }   
	} 


	// Cartt
	function add_to_cart(){ //fungsi Add To Cart
        $data = array(
            'id' => $this->input->post('produk_id'), 
            'name' => $this->input->post('produk_nama'), 
            'price' => $this->input->post('produk_harga'), 
            'qty' => $this->input->post('quantity')
        );  

        echo json_encode( $this->cart->insert($data) ); 
        // echo json_encode($data);
    }
  	
    //fungsi untuk menghapus item cart 
    function update_cart(){ 
        $output = array('error' => false);

        $data = array(
            'rowid' => $this->input->post('rowid'), 
            'qty' => $this->input->post('qty')
        );
        $res = $this->cart->update($data); 
        if ($res) { 

        }else{
            $output['error'] = true;
        }
        echo json_encode($output);
    }

  	function hapus_cart(){ //fungsi untuk menghapus item cart 
        $output = array('error' => false);

        $data = array(
            'rowid' => $this->input->post('rowid'), 
            'qty' => 0, 
        );
        $res = $this->cart->update($data); 
        if ($res) { 

        }else{
            $output['error'] = true;
        }
        echo json_encode($output);
    }

    public function showcart()
    { 
    	$data = array();
    	foreach ($this->cart->contents() as $items) { 
    		$p = $this->Product_model->getdetailproductcart( $items['id'] );

    		array_push($data, array('p_id'=>$items['id'],'nama'=>$items['name'],'qty'=>$items['qty'], 'rowid'=>$items['rowid']  , 'p'=> $p ) );
    	}

    	echo json_encode( $data );
    }

}