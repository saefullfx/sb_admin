<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

	/*public function getPegawaiAll($id = null) 
	{
		if ($id == null) {			
            $this->db->select('p.*, d.*, b.*, s.* ');
            $this->db->from('pegawai p');
            $this->db->join('departemen d', 'd.id_dept = p.id_dept', 'Left');
			$this->db->join('bpjs_keluarga b', 'b.id_pegawai = p.id_pegawai', 'Left');			
			$this->db->join('sertifikat_pelatihan s', 's.id_pegawai = p.id_pegawai', 'Left');
			$query = $this->db->get();
			return $query->result_array();
		}else{
			$this->db->select('p.*, d.*, b.*, s.* ');
            $this->db->from('pegawai p');
            $this->db->join('departemen d', 'd.id = p.id', 'Left');
			$this->db->join('bpjs_keluarga b', 'b.id = p.id', 'Left');			
			$this->db->join('sertifikat_pelatihan s', 's.id = p.id', 'Left');
			$this->db->where('p.id', $id);
			$query = $this->db->get();
			return $query->result_array();
		}		
	
	}*/

	public function getPegawaiAll()
	{
		
			return $this->db->get('pegawairead')->result_array();
		
		
	}

}

/* End of file pegawai_model.php */
/* Location: ./application/models/pegawai_model.php */