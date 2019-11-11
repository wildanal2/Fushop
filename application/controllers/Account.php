<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
 
 	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function login()
	{ 
		// if ($this->session->userdata('sik_logged')) {
		// 	$session_data = $this->session->userdata('sik_logged');
		// 	$data['username'] = $session_data['username'];
			// if ($session_data['level']==6) {
			// 	redirect('HomeCustomer','refresh');
			// }else if ($session_data['level']==5) {
			// 	redirect('AdminPemesanan','refresh');
			// }else if ($session_data['level']==4) {
			// 	redirect('AdminProduksi','refresh');
			// }else if ($session_data['level']==3) {
			// 	redirect('AdminPengiriman','refresh');
			// }else if ($session_data['level']==2) {
			// 	redirect('AdminBahanBaku','refresh');
			// }else{
				
			// } 
			// redirect('Account/login','refresh');
		// }else {
			$this->load->view('customer/portal_login');
		// }  
	}

	public function ceklogin()
	{ 
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$output = array('error' => false);

		$result = $this->Login_model->login($username,$password);
		if ($result) { 
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'id_user' => $row->kd_cust,
					'email' => $row->email,
					'level' => $row->level
				);	 
				$output['level'] = $row->level;
			} 
			// set sesion logined
			$this->session->set_userdata('sik_logged',$sess_array);  
			$output['message'] = 'Prosess Masuk. Tunggu sebentar...';
		}else { 
			$output['error'] = true;
			$output['message'] = 'User atau Password tidak terdaftar';  
		}

		echo json_encode($output); 
	}

	public function logout()
	{
		$this->session->unset_userdata('sik_logged');
		$this->session->sess_destroy();

		redirect('HomeCustomer','refresh');

	}
 

	public function createAccount()
	{
		$frist = $this->input->post('first');
		$last = $this->input->post('last');
		$mail = $this->input->post('mail');
		$pass = $this->input->post('pass');
		$output = array('error' => false);

		$mailing = $this->Login_model->cekmail($mail);
		if (!$mailing) {
			// mail belum digunakan
			$user = array(
						'first' => $frist,
						'last' => $last,
						'email' => $mail,
						'password' => $pass,
						'level' => 1,
						'status' => 1
					);
			$user = $this->Login_model->newuser($user);
			if ($user) { 
				$output['message'] = 'Email Berhasil di Daftarkan,  Mohon login kembali';
			}else{
				$output['error'] = true;	
				$output['message'] = 'Gagal Mendaftar mohon ulangi kembali';
			} 
		}else{
			$output['error'] = true;
			$output['message'] = 'Gagal Mendaftar Email Sudah digunakan';
		}

		echo json_encode($output); 
	}


}
