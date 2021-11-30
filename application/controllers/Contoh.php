<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contoh extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/contoh/blank');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */