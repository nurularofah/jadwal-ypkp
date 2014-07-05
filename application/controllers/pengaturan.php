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





	// CRUD LOKASI
	public function lokasi()
	{
		$data['records']=$this->mlokasi->getAllLokasi();
		$data['title']="Lokasi";
		$data['maincontent']="belakang/form/lokasi";
		$this->load->view('belakang/template', $data);
	}

	public function TambahLokasi()
	{
		$kode=$this->input->post('kode');
		$lokasi=$this->input->post('lokasi');		

		$dt=array(
			'kd_lokasi' => $kode,
			'nm_lokasi' => $lokasi
		);
		$this->mlokasi->tambahLokasi($dt);		
	}

	public function UbahLokasi()
	{
		$tmp=array(
			'nm_lokasi' => $this->input->post('lokasi')
		);
		$kode=$this->input->post('kode');
		$this->mlokasi->ubahLokasi($kode,$tmp);
	}

	public function HapusLokasi()
	{
		$kode=$this->input->post('kode');
		$this->mlokasi->hapusLokasi($kode);
	}





	// CRUD PRODI
	public function prodi()
	{
		$data['records']=$this->mprodi->getAllProdi();
		$data['title']="Prodi";
		$data['maincontent']="belakang/form/prodi";
		$this->load->view('belakang/template', $data);
	}

	public function TambahProdi()
	{
		$kode=$this->input->post('kode');
		$prodi=$this->input->post('prodi');		

		$dt=array(
			'kd_prodi' => $kode,
			'nm_prodi' => $prodi
		);
		$this->mprodi->tambahProdi($dt);		
	}

	public function UbahProdi()
	{
		$tmp=array(
			'nm_prodi' => $this->input->post('prodi')
		);
		$kode=$this->input->post('kode');
		$this->mprodi->ubahProdi($kode,$tmp);
	}

	public function HapusProdi()
	{
		$kode=$this->input->post('kode');
		$this->mprodi->hapusProdi($kode);
	}





	// CRUD JURUSAN
	public function jurusan()
	{
		$data['records']=$this->mjurusan->getAllJurusan();
		$data['prodi']=$this->mprodi->getAllProdi();
		$data['title']="Jurusan";
		$data['maincontent']="belakang/form/jurusan";
		$this->load->view('belakang/template', $data);
	}

	public function TambahJurusan()
	{
		$kode=$this->input->post('kode');
		$jurusan=$this->input->post('jurusan');		
		$jenjang=$this->input->post('jenjang');
		$prodi=$this->input->post('prodi');

		$dt=array(
			'kd_jurusan' => $kode,
			'nm_jurusan' => $jurusan,
			'jenjang' => $jenjang,
			'kd_prodi' => $prodi
		);
		$this->mjurusan->tambahJurusan($dt);		
	}

	public function UbahJurusan()
	{
		$tmp=array(			
			'nm_jurusan' => $this->input->post('jurusan'),
			'jenjang' => $this->input->post('jenjang'),
			'kd_prodi' => $this->input->post('prodi')
		);
		$kode=$this->input->post('kode');
		$this->mjurusan->ubahJurusan($kode,$tmp);
	}

	public function HapusJurusan()
	{
		$kd=$this->input->post('kode');
		$this->mjurusan->hapusJurusan($kd);
	}

	public function CariJurusan()
	{
		$kode=$this->input->post('kelas');
		$kelas=$this->mjurusan->cariJurusan($kode);
        if($kelas->num_rows()>0){
            $kelas=$kelas->row_array();
            echo $kelas['nm_jurusan'];
        }       
	}





	// CRUD KELAS
	public function kelas()
	{
		$data['records']=$this->mkelas->getAllKelas();		
		$data['jurusan']=$this->mjurusan->getAllJurusan();
		$data['title']="Kelas";
		$data['maincontent']="belakang/form/kelas";
		$this->load->view('belakang/template', $data);
	}

	public function TambahKelas()
	{
		$kode=$this->input->post('kode');
		$kelas=$this->input->post('kelas');		
		$jurusan=$this->input->post('jurusan');
		
		$dt=array(
			'kd_kelas' => $kode,
			'nm_kelas' => $kelas,
			'kd_jurusan' => $jurusan
		);
		$this->mkelas->tambahKelas($dt);		
	}

	public function UbahKelas()
	{
		$tmp=array(			
			'nm_kelas' => $this->input->post('kelas'),
			'kd_jurusan' => $this->input->post('jurusan')
		);
		$kode=$this->input->post('kode');
		$this->mkelas->ubahKelas($kode,$tmp);
	}

	public function HapusKelas()
	{
		$kd=$this->input->post('kode');
		$this->mkelas->hapusKelas($kd);
	}





	// CRUD SEMESTER
	public function semester()
	{
		$data['records']=$this->msemester->getAllSemester();
		$data['title']="Semester";
		$data['maincontent']="belakang/form/semester";
		$this->load->view('belakang/template', $data);
	}

	public function TambahSemester()
	{
		$kode=$this->input->post('kd_smstr');
		$keterangan=$this->input->post('keterangan');		

		$dt=array(
			'kd_smstr' => $kode,
			'keterangan' => $keterangan
		);
		$this->msemester->tambahSemester($dt);		
	}

	public function UbahSemester()
	{
		$tmp=array(
			'keterangan' => $this->input->post('keterangan')
		);
		$kode=$this->input->post('kode');
		$this->msemester->ubahSemester($kode,$tmp);
	}

	public function HapusSemester()
	{
		$kd=$this->input->post('kode');
		$this->msemester->hapusSemester($kode);
	}





	// CRUD RUANGAN
	public function ruangan()
	{
		$data['records']=$this->mruangan->getAllRuangan();
		$data['lokasi']=$this->mlokasi->getAllLokasi();
		$data['title']="Ruangan";
		$data['maincontent']="belakang/form/ruangan";
		$this->load->view('belakang/template', $data);
	}

	public function TambahRuangan()
	{
		$kode=$this->input->post('kode');
		$ruangan=$this->input->post('ruangan');		
		$kapasitas=$this->input->post('kapasitas');		
		$jenis=$this->input->post('jenis');		
		$lokasi=$this->input->post('lokasi');		

		$dt=array(
			'kd_ruang' => $kode,
			'nm_ruang' => $ruangan,
			'kapasitas' => $kapasitas,
			'jenis_ruang' => $jenis,
			'kd_lokasi' => $lokasi
		);
		$this->mruangan->tambahRuangan($dt);		
	}

	public function UbahRuangan()
	{
		$tmp=array(
			'nm_ruang' => $this->input->post('ruangan'),
			'kapasitas' => $this->input->post('kapasitas'),
			'jenis_ruang' => $this->input->post('jenis'),
			'kd_lokasi' => $this->input->post('lokasi')
		);
		$kode=$this->input->post('kode');
		$this->mruangan->ubahRuangan($kode,$tmp);
	}

	public function HapusRuangan()
	{
		$kd=$this->input->post('kode');
		$this->mruangan->HapusRuangan($kd);
	}





	// CRUD JADWAL MATAKULIAH
	public function jadwalmatakuliah()
	{
		$data['records']=$this->mjadwalmatakuliah->getJadwalMatakuliah();
		$data['title']="Jadwal Matakuliah";
		$data['maincontent']="belakang/form/jadwalmatakuliah";
		$this->load->view('belakang/template', $data);
	}

	public function vjadwal()
	{				
		//head
		$data['kelas']=$this->mkelas->getAllKelas();
		$data['semester']=$this->msemester->getAllSemester();
		$data['nooto']=$this->mjadwalmatakuliah->nootomatis();
		
		//detail
		$data['matakuliah']=$this->mmatakuliah->getAllMatkul();
		$data['ruangan']=$this->mruangan->getAllRuangan();
		$data['dosen']=$this->mdosen->getAllDosen();

		//content
		$data['title']="[Tambah] Jadwal Matakuliah";
		$data['maincontent']="belakang/form/vjadwal";
		$this->load->view('belakang/template', $data);
	}

	public function simpanJadwalMatakuliah()
	{
		$kode=$this->input->post('kode');
		$tahun=$this->input->post('tahun');		
		$kelas=$this->input->post('kdkelas');		
		$semester=$this->input->post('kdsemester');		
		
		$dt=array(
			'kd_head_jadwal' => $kode,
			'tahun' => $tahun,
			'kd_kelas' => $kelas,
			'kd_smstr' => $semester
		);
		$this->mjadwalmatakuliah->TambahJadwalMatakuliah($dt);
	}
}

/* End of file pengaturan.php */
/* Location: ./application/controllers/pengaturan.php */