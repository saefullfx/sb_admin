<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model("Pegawai_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data["title"] = "Halaman Pegawai";
		$data['pegawai'] = $this->Pegawai_model->getPegawaiAll();
		$this->load->view('pegawai/index', $data);
	}

	

}

/* End of file pegawai.php */
/* Location: ./application/controllers/pegawai.php */