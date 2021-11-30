<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bpjs_model extends CI_Model {

	private $table = "bpjs_keluarga";

	public function getAll()
	{
		$hasil = $this->db->get($this->table);
		return $hasil->result();
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function getById($id)
	{
		return $this->db->get_where($this->table, ["id" => $id])->row();
	}

	public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }
	
	public function delete($id)
	{
		return $this->db->delete($this->table, array("id" => $id));
	}

}

/* End of file  */
/* Location: ./application/models/ */