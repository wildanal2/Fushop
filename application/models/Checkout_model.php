<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends CI_Model {
  
 
	public function newcheckout($data)
	{
		$res = $this->db->insert('order_transaksi', $data);
		if ($res) {
			return $this->db->insert_id();
		}else{
			return false;
		}
		
	}

	public function newcheckoutitem($data)
	{
		return $this->db->insert('order_list', $data); 
	}

} 