<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if(!$this->session->userdata('level') == 2){
			redirect('auth');
		}else{
			// echo "kasir";
			$this->load->view('kasir_message');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */