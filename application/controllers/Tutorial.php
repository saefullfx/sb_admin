<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorial extends CI_Controller
{
	public function index()
	{

    	$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation', 'session');


		$data['title'] = "Upload Gambar 2 file";
		$data['data'] = $this->db->get('unggah')->result();
		$this->load->view('unggah/create', $data, FALSE);
	}
    
    public function canvas()
    {
        $this->load->view('unggah/canvas');
    }

	public function create()
	{
		if (isset($_POST['submit'])) {
			//$this->form_validation->set_rules('keterangan_gambar', 'KG', 'required');

				$config['upload_path']          = './uploads/images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 2000;
                $config['max_height']           = 1500;
                $config['encrypt_name'] 		= TRUE;

                $this->load->library('upload', $config);

                //file 1
                if(!empty($_FILES['file1']['name'])){
                	$this->upload->do_upload('file1');
                	$data1 = $this->upload->data();
                	$file1 = $data1['file_name'];
                }

                if (!empty($_FILES['file2']['name'])) {
                	$this->upload->do_upload('file2');
                	$data2 = $this->upload->data();
                	$file2 = $data2['file_name'];
                }

               
                	$keterangan_gambar = $this->input->post('keterangan', TRUE);
                	$data = [
                		'keterangan' => $keterangan_gambar, 
                		'file1' => $file1,
                		'file2' => $file2
                ];

                
                $insert = $this->db->insert('unggah', $data);
	                if ($insert) {
	                	$this->session->set_flashdata('pesan', 'Berhasil ditambahkan');
	                	redirect('tutorial');
	                }
                
             
		}
	}

    public function canvas_upload()
    {
  
    $folderPath = "upload/";
  
    $image_parts = explode(";base64,", $_POST['signed']);
        
    $image_type_aux = explode("image/", $image_parts[0]);
      
    $image_type = $image_type_aux[1];
      
    $image_base64 = base64_decode($image_parts[1]);
      
    $file = $folderPath . uniqid() . '.'.$image_type;
      
    file_put_contents($file, $image_base64);
    echo "Signature Uploaded Successfully.";

    }
}