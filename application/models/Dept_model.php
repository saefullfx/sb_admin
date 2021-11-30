<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dept_model extends CI_Model {
	private $table = "departemen";

	public function getDept()
	{
		$hasil = $this->db->get($this->table);
		return $hasil->result();
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function getDeptById($id)
	{
		return $this->db->get_where($this->table, ["id_dept" => $id])->row();
	}

	public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('id_dept' => $id));
    }
	
	public function delete($id)
	{
		return $this->db->delete($this->table, array("id_dept" => $id));
	}

	function hapus_dept($id){
        $hasil = $this->db->query("DELETE FROM departemen WHERE id_dept='$id'");
        return $hasil->result();
    }

}

/* End of file dept_model.php */
/* Location: ./application/models/dept_model.php */