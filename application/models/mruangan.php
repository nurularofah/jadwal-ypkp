<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mruangan extends CI_Model {

	public function __construct()
	{
		parent::__construct();	
	}	

	function getAllRuangan()
	{
		$query=$this->db->get('usb_ruang');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$xxx[]=$row;
			}
			return $xxx;
		}
	}

	function tambahRuangan($dta)
	{
		$this->db->insert('usb_ruang', $dta);
	}

	function ubahRuangan($nip,$tmp)
	{
		$this->db->where('kd_ruang',$nip);
		$this->db->update('usb_ruang', $tmp);
	}

	function hapusRuangan($nip)
	{
		$this->db->where('kd_ruang',$nip);
		$this->db->delete('usb_ruang');
	}
}

/* End of file mruangan.php */
/* Location: ./application/models/mruangan.php */