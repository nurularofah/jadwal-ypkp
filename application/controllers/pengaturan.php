<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdosen');
	}

	public function index()
	{
		$data['title']="Dashboard";
		$data['maincontent']="belakang/form/dashboard";
		$this->load->view('belakang/template', $data);
	}

	public function dosen()
	{
		$data['title']="Dosen";
		$data['maincontent']="belakang/form/dosen";
		$data['events']="belakang/javascript/dosen";
		$this->load->view('belakang/template', $data);
	}

	public function TambahDosen()
	{
		$nip=$this->input->post('nip');		
		$dt=array(
			'nip' => $nip
		);
		$this->mdosen->TambahDosen($dt);
	}

	public function matakuliah()
	{
		$data['title']="Matakuliah";
		$data['maincontent']="belakang/form/matakuliah";
		$this->load->view('belakang/template', $data);
	}
}

/* End of file pengaturan.php */
/* Location: ./application/controllers/pengaturan.php */