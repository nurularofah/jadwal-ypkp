<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
	}

	public function index()
	{
		$data['title']="Dashboard";
		$data['maincontent']="belakang/form/dashboard";
		$this->load->view('belakang/template', $data);
	}




	// CRUD DOSEN
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
	}

	public function UbahDosen()
	{
		$tmp=array(
			'nm_dosen' => $this->input->post('nama'),
			'jab_fungsional' => $this->input->post('jabatan'),
			'pendidikan' => $this->input->post('pendidikan'),
			'tempat_lahir' => $this->input->post('tempatlahir'),
			'tgl_lahir' => $this->input->post('tanggallahir'),
			'no_tlp' => $this->input->post('telepon'),
			'no_hp' => $this->input->post('handphone'),
			'alamat' => $this->input->post('alamat'),
		);
		$nip=$this->input->post('nip');
		$this->mdosen->ubahDosen($nip,$tmp);
	}

	public function HapusDosen()
	{
		$nip=$this->input->post('nip');
		$this->mdosen->hapusDosen($nip);
	}




	// CRUD MATAKULIAH
	public function matakuliah()
	{
		$data['records']=$this->mmatakuliah->getAllMatkul();
		$data['title']="Matakuliah";
		$data['maincontent']="belakang/form/matakuliah";
		$this->load->view('belakang/template', $data);
	}

	public function TambahMatkul()
	{
		$kode=$this->input->post('kode');
		$matkul=$this->input->post('matakuliah');
		$sks=$this->input->post('sks');		

		$dt=array(
			'kd_matkul' => $kode,
			'nm_matkul' => $matkul,
			'sks' => $sks
		);
		$this->mmatakuliah->TambahMatkul($dt);		
	}

	public function UbahMatkul()
	{
		$tmp=array(
			'nm_matkul' => $this->input->post('matakuliah'),
			'sks' => $this->input->post('sks')
		);
		$kode=$this->input->post('kode');
		$this->mmatakuliah->ubahMatkul($kode,$tmp);
	}

	public function HapusMatkul()
	{
		$kode=$this->input->post('kode');
		$this->mmatakuliah->hapusMatkul($kode);
	}


	// CRUD JADWAL MATAKULIAH
	public function jadwalmatakuliah()
	{
		$data['records']=$this->mjadwalmatakuliah->getJadwalMatakuliah();
		$data['title']="Jadwal Matakuliah";
		$data['maincontent']="belakang/form/jadwalmatakuliah";
		$this->load->view('belakang/template', $data);
	}
}

/* End of file pengaturan.php */
/* Location: ./application/controllers/pengaturan.php */