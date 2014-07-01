<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mmatakuliah extends CI_Model {

	public function __construct()
	{
		parent::__construct();		
	}

	function TambahMatkul($dta)
	{
		$this->db->insert('usb_matkul', $dta);
	}

	function getAllMatkul()
	{
		$query=$this->db->get('usb_matkul');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$xxx[]=$row;
			}
			return $xxx;
		}
	}

	function ubahMatkul($nip,$tmp)
	{
		$this->db->where('kd_matkul',$nip);
		$this->db->update('usb_matkul', $tmp);
	}

	function hapusMatkul($nip)
	{
		$this->db->where('kd_matkul',$nip);
		$this->db->delete('usb_matkul');
	}

}

/* End of file mmatakuliah.php */
/* Location: ./application/models/mmatakuliah.php */