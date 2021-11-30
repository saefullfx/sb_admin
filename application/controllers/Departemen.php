<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Dept_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['title'] = "Halaman Index Departemen";
		$data['departemen'] = $this->Dept_model->getDept();
		$this->load->view('departemen/index', $data);
		
	}

	public function add()
	{
		$this->load->view('departemen/add');
	}

	public function save()
	{
		$this->form_validation->set_rules('nama_departemen', 'Nama Departemen', 'trim|required', 
			array('required' => 'Nama Departemen Tidak boleh kosong'));
		if ($this->form_validation->run() == true) {
			$data['nama_departemen'] = $this->input->post('nama_departemen');
			$this->session->set_flashdata('simpan', 'Data Berhasil Ditambahkan');
			$this->Dept_model->save($data);
			redirect('departemen','refresh');
		}else{
			$this->load->view('departemen/add');
		}
	}

	public function edit($id)
	{
		$data['departemen'] = $this->Dept_model->getDeptById($id);
		$this->load->view('departemen/edit', $data);
	}

	public function update()
	{
		$this->form_validation->set_rules('nama_departemen', 'Nama Departemen', 'trim|required');
		if ($this->form_validation->run()==true)
        {
        	$id = $this->input->post('id_dept');
        	$data['nama_departemen'] = $this->input->post('nama_departemen');

        	$this->Dept_model->update($data, $id);
        	$this->session->set_flashdata('update', 'Data Berhasil Diubah');
        	redirect('departemen','refresh');
        }else{
        	$id = $this->input->post('id_dept');
			$data['departemen'] = $this->Dept_model->getDeptById($id);
			
			$this->load->view('departemen/edit', $data);
        }
	}

	public function delete($id)
	{
		$this->Dept_model->delete($id);
		$this->session->set_flashdata('delete', 'Data Berhasil Dihapus');
		redirect('departemen','refresh');
	}

	function hapus_dept(){
        $id = $this->input->post('id_dept');
        $this->session->set_flashdata('delete', 'Data Berhasil Dihapus');
		redirect('departemen','refresh');
    }

}

/* End of file departemen.php */
/* Location: ./application/controllers/departemen.php */