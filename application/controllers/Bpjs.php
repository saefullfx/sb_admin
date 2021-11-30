<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpjs extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Bpjs_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['title'] = "Halaman Bpjs";
		$data['bpjs_keluarga'] = $this->Bpjs_model->getAll();
		$this->load->view('bpjs/index', $data);
	}

	public function add()
	{
		$this->load->view('bpjs/add');
	}

	public function save()
	{
		$this->form_validation->set_rules('pegawai_id', 'Nama pegawai', 'trim|required', array('required' => 'Nama Pegawai Tidak boleh kosong'));
		$this->form_validation->set_rules('nama', 'Nama Pemegang Bpjs', 'trim|required', array('required' => 'Nama Pemegang Bpjs Tidak boleh kosong'));
		$this->form_validation->set_rules('nomor_bpjs', 'Nomor Bpjs', 'trim|required', array('required' => 'Nomor Bpjs Tidak boleh kosong'));
		$this->form_validation->set_rules('keterangan', 'Keterangan Hubungan', 'trim|required', array('required' => 'Keterangan Hubungan Tidak boleh kosong'));
		$this->form_validation->set_rules('tanggal_lahir', 'Keterangan Hubungan', 'trim|required', array('required' => 'Tanggal lahir Hubungan Tidak boleh kosong'));
		$this->form_validation->set_rules('pendidikan', 'Keterangan Hubungan', 'trim|required', array('required' => 'Pendidikan Hubungan Tidak boleh kosong'));
		$this->form_validation->set_rules('pekerjaan', 'Keterangan Hubungan', 'trim|required', array('required' => 'Pekerjaan Hubungan Tidak boleh kosong'));

		if ($this->form_validation->run() == true) {
			$data['pegawai_id'] = $this->input->post('pegawai_id');
			$data['nama'] = $this->input->post('nama');
			$data['nomor_bpjs'] = $this->input->post('nomor_bpjs');
			$data['keterangan'] = $this->input->post('keterangan');
			$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$data['pendidikan'] = $this->input->post('pendidikan');
			$data['pekerjaan'] = $this->input->post('pekerjaan');


			$this->session->set_flashdata('simpan', 'Data Berhasil Ditambahkan');
			$this->Bpjs_model->save($data);
			redirect('bpjs','refresh');
		}else{
			$this->load->view('bpjs/add');
		}
	}

	public function edit($id)
	{
		$data['bpjs_keluarga'] = $this->Bpjs_model->getById($id);
		$this->load->view('bpjs/edit', $data);
	}

	public function update()
	{
		$this->form_validation->set_rules('pegawai_id', 'Nama pegawai', 'trim|required', array('required' => 'Nama Pegawai Tidak boleh kosong'));
		$this->form_validation->set_rules('nama', 'Nama Pemegang Bpjs', 'trim|required', array('required' => 'Nama Pemegang Bpjs Tidak boleh kosong'));
		$this->form_validation->set_rules('nomor_bpjs', 'Nomor Bpjs', 'trim|required', array('required' => 'Nomor Bpjs Tidak boleh kosong'));
		$this->form_validation->set_rules('keterangan', 'Keterangan Hubungan', 'trim|required', array('required' => 'Keterangan Hubungan Tidak boleh kosong'));
		$this->form_validation->set_rules('tanggal_lahir', 'Keterangan Hubungan', 'trim|required', array('required' => 'Tanggal lahir Hubungan Tidak boleh kosong'));
		$this->form_validation->set_rules('pendidikan', 'Keterangan Hubungan', 'trim|required', array('required' => 'Pendidikan Hubungan Tidak boleh kosong'));
		$this->form_validation->set_rules('pekerjaan', 'Keterangan Hubungan', 'trim|required', array('required' => 'Pekerjaan Hubungan Tidak boleh kosong'));
		if ($this->form_validation->run()==true)
        {
        	$id = $this->input->post('id');
        	$data['pegawai_id'] = $this->input->post('pegawai_id');
			$data['nama'] = $this->input->post('nama');
			$data['nomor_bpjs'] = $this->input->post('nomor_bpjs');
			$data['keterangan'] = $this->input->post('keterangan');
			$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$data['pendidikan'] = $this->input->post('pendidikan');
			$data['pekerjaan'] = $this->input->post('pekerjaan');

        	$this->Bpjs_model->update($data, $id);
        	$this->session->set_flashdata('update', 'Data Berhasil Diubah');
        	redirect('bpjs','refresh');
        }else{
        	$id = $this->input->post('id');
			$data['bpjs_keluarga'] = $this->Bpjs_model->getById($id);
			
			$this->load->view('bpjs/edit', $data);
        }
	}

	public function delete($id)
	{
		$this->Bpjs_model->delete($id);
		$this->session->set_flashdata('delete', 'Data Berhasil Dihapus');
		redirect('bpjs','refresh');
	}

}

/* End of file bpjs.php */
/* Location: ./application/controllers/bpjs.php */