<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdosen extends CI_Model {

	public function __construct()
	{
		parent::__construct();		
	}


	// CRUD DOSEN
	function TambahDosen($dta)
	{
		$this->db->insert('usb_dosen', $dta);
	}

	function getAllDosen()
	{
		$query=$this->db->get('usb_dosen');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$xxx[]=$row;
			}
			return $xxx;
		}
	}

	function ubahDosen($nip,$tmp)
	{
		$this->db->where('nip',$nip);
		$this->db->update('usb_dosen', $tmp);
	}

	function hapusDosen($nip)
	{
		$this->db->where('nip',$nip);
		$this->db->delete('usb_dosen');
	}




	// CRUD MATAKULIAH
	function getAllMatkul()
	{
		$query=$this->db->get('usb_matkul');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$xxx[]=$row;
			}
			return $xxx;
		}
	}
}

/* End of file mDosen.php */
/* Location: ./application/models/mDosen.php */