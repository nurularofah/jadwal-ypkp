<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdosen extends CI_Model {

	public function __construct()
	{
		parent::__construct();		
	}

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

}

/* End of file mDosen.php */
/* Location: ./application/models/mDosen.php */