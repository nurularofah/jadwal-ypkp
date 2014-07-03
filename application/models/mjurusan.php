<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mjurusan extends CI_Model {

	public function __construct()
	{
		parent::__construct();	
	}	

	function getAllJurusan()
	{
		$query=$this->db->get('usb_jurusan');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$xxx[]=$row;
			}
			return $xxx;
		}
	}

	function cariJurusan($kode)
	{
		$this->db->where("kd_kelas",$kode);
        return $this->db->get("vkelas");
	}

	function tambahJurusan($dta)
	{
		$this->db->insert('usb_jurusan', $dta);
	}

	function ubahJurusan($nip,$tmp)
	{
		$this->db->where('kd_jurusan',$nip);
		$this->db->update('usb_jurusan', $tmp);
	}

	function hapusJurusan($nip)
	{
		$this->db->where('kd_jurusan',$nip);
		$this->db->delete('usb_jurusan');
	}

}

/* End of file mjurusan.php */
/* Location: ./application/models/mjurusan.php */