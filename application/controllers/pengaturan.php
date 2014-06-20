<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function index()
	{
		$data['title']="Dashboard";
		$data['maincontent']="belakang/form/dashboard";
		$this->load->view('belakang/template', $data);
	}

}

/* End of file pengaturan.php */
/* Location: ./application/controllers/pengaturan.php */