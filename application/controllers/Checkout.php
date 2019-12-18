<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
 
 	public function __construct()
	 {
	 	parent::__construct();
	 	$this->load->model('Checkout_model'); 
	 }

	public function index()
	{ 
	   $this->load->view('customer/checkout'); 
	} 


    public function checkout()
    {
        $result = false;
        date_default_timezone_set("Asia/Jakarta");

        if ( $ses = $this->session->userdata('sik_logged') ) {
            $data = array( 
                    'id_user' => $ses['id_user'],
                    'nama_penerima_dpn' => $this->input->post('n_dpn'),
                    'nama_penerima_blkg' => $this->input->post('n_blkg'),
                    'nohp' => $this->input->post('hp'),
                    'email' => $this->input->post('mail'),
                    'full_alamat' => $this->input->post('alamat'),
                    'kodepos' => $this->input->post('pos'),
                    'kota' => $this->input->post('kota'),
                    'catatan' => $this->input->post('note'),
                    'status' => 1,
                    'tanggal' => date("Y-m-d H:i:s")
                );

            $result = $this->Checkout_model->newcheckout($data);

            if ($result != false) {
                // 
                foreach ($this->cart->contents() as $items) { 
                    $item = array(
                                'kd_transaksi' => $result,
                                'kd_barang' => $items['id'],
                                'qty' => $items['qty'],
                                'harga' => $items['price'],
                                'subtotal' => ( $items['qty']*$items['price'] ),
                            );
                    $res = $this->Checkout_model->newcheckoutitem($item);
                    if ($res) {
                        $data = array(
                            'rowid' => $items['rowid'], 
                            'qty' => 0, 
                        );
                        $this->cart->update($data); 
                    }
                }
            }
        }

        echo json_encode($result);
    }
 

}