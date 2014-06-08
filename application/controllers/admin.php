<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function pengaturan()
	{
		$this->load->view('belakang/dashboard');
	}

}

/* End of file pengaturan.php */
/* Location: ./application/controllers/pengaturan.php */