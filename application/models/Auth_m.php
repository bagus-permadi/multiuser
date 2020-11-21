<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model {

	function cek_users($username,$password)
	{
		$kondisi = array(
			'username' => $username,
			'password' => md5($password)
		);

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($kondisi);
		$this->db->limit(1);
		return $this->db->get();
	}

}

/* End of file Auth_m.php */
/* Location: ./application/models/Auth_m.php */