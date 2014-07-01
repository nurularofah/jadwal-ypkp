<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mkelas extends CI_Model {

	public function __construct()
	{
		parent::__construct();			
	}

	public function getAllKelas()
	{
		$query=$this->db->get('vkelas');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$xxx[]=$row;
			}
			return $xxx;
		} else {			
			return $xxx="Data Tidak ditemukan";
		}
	}

	function tambahKelas($dta)
	{
		$this->db->insert('usb_kelas', $dta);
	}

	function ubahKelas($nip,$tmp)
	{
		$this->db->where('kd_kelas',$nip);
		$this->db->update('usb_kelas', $tmp);
	}

	function hapusKelas($nip)
	{
		$this->db->where('kd_kelas',$nip);
		$this->db->delete('usb_kelas');
	}
}

/* End of file mkelas.php */
/* Location: ./application/models/mkelas.php */