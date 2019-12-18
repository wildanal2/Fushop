<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function productAllHome()
	{
		$query = $this->db->query("SELECT *,COALESCE((SELECT product_foto.source FROM product_foto WHERE product_foto.fotoid=product.kd_barang LIMIT 1),'products/notfound.png')as source,shop.id as id_toko FROM product join shop on product.shop_id=shop.id"); 
		
		return $query->result();
	}

	public function productAllAdmin()
	 {
	 	$query = $this->db->query("SELECT * from product JOIN category on product.id_category=category.id"); 
		
		return $query->result();
	 } 

	public function productDetailId($id)
	{
		// $this->db->where('kd_barang',$id);
		$query = $this->db->query("select * from product JOIN shop ON product.shop_id=shop.id JOIN category ON product.id_category=category.id where kd_barang=$id");

		return $query->first_row();	
	}

	public function productCategoryId($id)
	{  
		$query = $this->db->query("
				select *,COALESCE((SELECT product_foto.source FROM product_foto WHERE product_foto.fotoid=product.kd_barang LIMIT 1),'products/notfound.png')as source from product JOIN shop ON product.shop_id=shop.id JOIN category ON product.id_category=category.id where category.id=$id");

		return $query->result();
	} 

	public function productPhoto($id)
	{ 
		$query = $this->db->query("select * from product_foto where fotoid=$id");
		
		if ($query->num_rows()>=1) {
			return $query->first_row();	
		}else{
			return false;
		}
	}

	public function newproduk($data)
	{
		$so = $this->db->insert('product', $data);
		
		if ($so) {
		 	return $this->db->insert_id();
		}else{
			return false;
		} 
	}

	public function newfotoproduk($data)
	{
		$this->db->insert('product_foto', $data);
	}

	//. ===== GET DATA ITEM DETAIL CART  ======= \\\\\
	public function getdetailproductcart($id)
	{
		$q = $this->db->query("select *,
								COALESCE((SELECT product_foto.source FROM product_foto WHERE product_foto.fotoid=product.kd_barang LIMIT 1),'products/notfound.png')as source 
								from product 
								JOIN shop ON product.shop_id=shop.id  
								where product.kd_barang=$id");
		return $q->first_row();	
	}

	//// =======.  FEATURE. ======== \\\\
		public function newFav($data)
		{
			return $this->db->insert('produkfavorit', $data);
		}
		public function removeFav($id)
		{
			return $this->db->delete('produkfavorit', array('idfav' => $id));  // Produces: // DELETE FROM mytable  // WHERE id = $id
		}
		
		public function listprodfav($id)
		{

			$query = $this->db->query("SELECT *,COALESCE((SELECT product_foto.source FROM product_foto WHERE product_foto.fotoid=produkfavorit.idproduk LIMIT 1),'products/notfound.png')as source from produkfavorit JOIN product on product.kd_barang=produkfavorit.idproduk join shop on product.shop_id=shop.id WHERE produkfavorit.iduser=$id"); 
			return $query->result();
		}

		public function listfavbyid($id)
		{
			$query = $this->db->query("SELECT * FROM produkfavorit where iduser=$id");
			return $query->result();
		}
	// LIST TRANSAKSI PRODUK
		public function listtransprod($id)
		{
			$query = $this->db->query("SELECT * FROM order_transaksi where id_user=$id");

			return $query->result();
		}

		public function detaillisttransprod($id)
		{
			$query = $this->db->query("SELECT * FROM order_list where kd_transaksi=$id");

			return $query->result();
		}



} 