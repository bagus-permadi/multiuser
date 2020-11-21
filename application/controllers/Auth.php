<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_m','am');
	}

	public function index()
	{
		if($this->session->userdata('level') == 1){
			redirect('welcome');
		}elseif($this->session->userdata('level') == 2){
			redirect('kasir');
		}elseif($this->session->userdata('level') == 3){
			redirect('gudang');
		}else{
			$data = array(
				'title' => 'Form Login',
				'fieldset' => 'Login Multilevel'
			);
			$this->load->view('form_v', $data);
		}
	}

	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->am->cek_users($username,$password);

		if($cek->num_rows() == 1){
			foreach($cek->result() as $data){
				$users = array(
					'level' => $data->level
				);

				$this->session->set_userdata($users);

				if($this->session->userdata('level') == 1){
					// echo 'ini halaman admin';
					redirect('welcome');
				}elseif($this->session->userdata('level') == 2){
					// echo 'ini halaman kasir';
					redirect('kasir');
				}elseif($this->session->userdata('level') == 3){
					// echo 'ini halaman gudang';
					redirect('gudang');
				}else{
					echo 'tidak masuk kategori';
				}
			}
		}else{
			echo "user tidak terdaftar";
		}

		// var_dump($cek);
		// die();
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */