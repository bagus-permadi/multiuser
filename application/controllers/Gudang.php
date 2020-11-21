<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if(!$this->session->userdata('level') == 2){
			redirect('auth');
		}else{
			// echo "gudang";
			$this->load->view('gudang_message');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

}

/* End of file Gudang.php */
/* Location: ./application/controllers/Gudang.php */