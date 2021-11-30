<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'html');
		$this->load->model('User_model');
	}


	public function index()
	{
		$this->load->view('admin/overview');
	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function user_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		if ($this->form_validation->run() ) 
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->User_model->login($username, $password);
		} 
		else {
			$this->login();
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/login','refresh');
	}
}
