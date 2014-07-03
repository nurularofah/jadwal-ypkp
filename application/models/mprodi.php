<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mprodi extends CI_Model {

	public function __construct()
	{
		parent::__construct();		
	}

	function getAllProdi()
	{
		$query=$this->db->get('usb_prodi');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$xxx[]=$row;
			}
			return $xxx;
		}
	}

	function tambahProdi($dta)
	{
		$this->db->insert('usb_prodi', $dta);
	}

	function ubahProdi($nip,$tmp)
	{
		$this->db->where('kd_prodi',$nip);
		$this->db->update('usb_prodi', $tmp);
	}

	function hapusProdi($nip)
	{
		$this->db->where('kd_prodi',$nip);
		$this->db->delete('usb_prodi');
	}

}

/* End of file mprodi.php */
/* Location: ./application/models/mprodi.php */