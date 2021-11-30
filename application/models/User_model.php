<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	var $table = "user";

	public function __construct()
	{
		parent::__construct();
		
	}

	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where(['username' => $username, 'password' => md5($password)]);
		$return = $this->db->get('');

			if ($return->num_rows() > 0) {
				
				foreach ($return->result() as $row) 
				{
					if ($row->level=="admin") 
					{
						$session = array('level' =>$row);
					}
					redirect('welcome','refresh');
				}
			}else{
				$this->session->set_flashdata('pesan', 'Username dan Password tidak valid');
				redirect('welcome/login','refresh');
			}
	}

}

/* End of file  */
/* Location: ./application/models/ */