<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Favorite_model extends CI_Model { 

	public function cekFavbyIdProd($prod,$usr)
	{
		$query = $this->db->query("SELECT * FROM produkfavorit WHERE iduser=$usr AND idproduk=$prod"); 
		if ($query->num_rows()>=1) {
			$re['id'] = $query->first_row()->idfav;
			$re['st'] = true;
			return $re;
		}else{
			$re['id'] = null;
			$re['st']=false;
			return $re;
		}
	}

} 