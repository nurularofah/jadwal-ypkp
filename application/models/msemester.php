<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Msemester extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}	


	function getAllSemester()
	{
		$query=$this->db->get('usb_semester');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$xxx[]=$row;
			}
			return $xxx;
		}
	}

	function tambahSemester($dta)
	{
		$this->db->insert('usb_semester', $dta);
	}

	function ubahSemester($kd,$tmp)
	{
		$this->db->where('kd_smstr',$kd);
		$this->db->update('usb_semester', $tmp);
	}

	function hapusSemester($kd)
	{
		$this->db->where('kd_smstr',$kd);
		$this->db->delete('usb_semester');
	}

}

/* End of file mlokasi.php */
/* Location: ./application/models/mlokasi.php */