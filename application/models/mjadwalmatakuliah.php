<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mjadwalmatakuliah extends CI_Model {

	public function __construct()
	{
		parent::__construct();			
	}	

	public function getJadwalMatakuliah()
	{
		$query=$this->db->get('vjadwalmatakuliah');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$xxx[]=$row;
			}
			return $xxx;
		} else {			
			return $xxx="Data Tidak ditemukan";
		}
	}
}

/* End of file mjadwalmatakuliah.php */
/* Location: ./application/models/mjadwalmatakuliah.php */