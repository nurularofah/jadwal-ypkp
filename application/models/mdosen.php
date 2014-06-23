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

}

/* End of file mDosen.php */
/* Location: ./application/models/mDosen.php */