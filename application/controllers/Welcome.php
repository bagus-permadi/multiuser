<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if(!$this->session->userdata('level') == 1){
			redirect('auth');
		}else{
			// echo "admin";
			$this->load->view('welcome_message');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
