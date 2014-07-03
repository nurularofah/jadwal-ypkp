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

	function nootomatis(){
        $today=date('Ymd');
        $query=mysql_query("select max(kd_head_jadwal) as last from usb_jadwalmatkul where kd_head_jadwal like '$today%'");
        $data=mysql_fetch_array($query);
        $lastNoFaktur=$data['last'];
        
        $lastNoUrut=substr($lastNoFaktur,8,3);
        
        $nextNoUrut=$lastNoUrut+1;
        
        $nextNoTransaksi=$today.sprintf('%02s',$nextNoUrut);
        
        return $nextNoTransaksi;
    }
}

/* End of file mjadwalmatakuliah.php */
/* Location: ./application/models/mjadwalmatakuliah.php */