<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('depan/beranda');
	}
     
}

/* End of file jadwal.php */
/* Location: ./application/controllers/jadwal.php */