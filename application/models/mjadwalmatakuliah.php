<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mjadwalmatakuliah extends CI_Model {

	public function __construct()
	{
		parent::__construct();			
	}	

	public function getAllJadwalMatakuliah()
	{
		$query=$this->db->get('usb_jadwalmatkul');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$xxx[]=$row;
			}
			return $xxx;
		}
	}
}

/* End of file mjadwalmatakuliah.php */
/* Location: ./application/models/mjadwalmatakuliah.php */