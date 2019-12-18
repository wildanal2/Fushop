<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FavoriteControl extends CI_Controller {
 
 	public function __construct()
	{
	 	parent::__construct();
	 	$this->load->model('Favorite_model'); 
	}

	public function ckFavProduct()
	{
		$prod = $this->input->post('prod');
		$out = array( 'sesion' => false );
		// cek sesi 
			if ( $ses = $this->session->userdata('sik_logged') ) {
				$out['sesion'] = true;
					$fav = $this->Favorite_model->cekFavbyIdProd($prod, $ses['id_user'] ); 
				$out['id_f'] = $fav['id'];
				$out['id_user'] = $ses['id_user'];
				$out['is_fav'] = $fav['st'];
			}

		echo json_encode($out);
	}



}