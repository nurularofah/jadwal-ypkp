<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlokasi extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}	


	function getAllLokasi()
	{
		$query=$this->db->get('usb_lokasi');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$xxx[]=$row;
			}
			return $xxx;
		}
	}

	function tambahLokasi($dta)
	{
		$this->db->insert('usb_lokasi', $dta);
	}

	function ubahLokasi($nip,$tmp)
	{
		$this->db->where('kd_lokasi',$nip);
		$this->db->update('usb_lokasi', $tmp);
	}

	function hapusLokasi($nip)
	{
		$this->db->where('kd_lokasi',$nip);
		$this->db->delete('usb_lokasi');
	}

}

/* End of file mlokasi.php */
/* Location: ./application/models/mlokasi.php */