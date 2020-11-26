<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcomeblade extends MY_Controller {

	public function index()
	{
		echo $this->$blade->view()->make('v_blade', ['name' => 'John Doe']);
	}

}

/* End of file Welcomeblade.php */
/* Location: ./application/controllers/Welcomeblade.php */