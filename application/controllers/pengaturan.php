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
		$data['records']=$this->mdosen->getAllDosen();
		$data['title']="Dosen";
		$data['maincontent']="belakang/form/dosen";
		$data['events']="belakang/javascript/dosen";
		$this->load->view('belakang/template', $data);
	}

	public function TambahDosen()
	{
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$jabatan=$this->input->post('jabatan');
		$pendidikan=$this->input->post('pendidikan');
		$tempatlahir=$this->input->post('tempatlahir');
		$tanggallahir=$this->input->post('tanggallahir');
		$telepon=$this->input->post('telepon');
		$handphone=$this->input->post('handphone');
		$alamat=$this->input->post('alamat');

		$dt=array(
			'nip' => $nip,
			'nm_dosen' => $nama,
			'jab_fungsional' => $jabatan,
			'pendidikan' => $pendidikan,
			'tempat_lahir' => $tempatlahir,
			'tgl_lahir' => $tanggallahir,
			'no_tlp' => $telepon,
			'no_hp' => $handphone,
			'alamat' => $alamat	
		);
		$this->mdosen->TambahDosen($dt);
		$this->load->view('pengaturan/dosen');
	}

	public function UbahDosen()
	{
		# code...
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