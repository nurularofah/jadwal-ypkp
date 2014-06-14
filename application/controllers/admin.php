<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function pengaturan()
	{
		$data['maincontent'] = 'belakang/form/dashboard';
		$data['title'] = 'Dashboard';
		$this->load->view('belakang/template',$data);
	}

	public function dosen()
	{
		$data['maincontent'] = 'belakang/form/dosen';
		$data['title'] = 'Dosen';
		$this->load->view('belakang/template',$data);
	}

	public function matakuliah()
	{
		$data['maincontent'] = 'belakang/form/matakuliah';
		$data['title'] = 'Matakuliah';
		$this->load->view('belakang/template',$data);
	}

}

/* End of file pengaturan.php */
/* Location: ./application/controllers/pengaturan.php */