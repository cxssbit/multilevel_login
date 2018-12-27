<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->AuthModel->auth(1);
	}

	public function index($id)
	{
        $config['upload_path']          = './assets/images';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1500;
        $config['max_height']           = 1500;
        $config['encrypt_name']			= TRUE;

      	$this->load->library('upload', $config);

      	if ( ! $this->upload->do_upload('userfile'))
        {
            $this->session->set_flashdata('info', $this->upload->display_errors());
            redirect("user/edit/$id");
        }
        else
        {
            $resize['image_library'] = 'gd2';
            $resize['source_image']  = $this->upload->data('full_path');
            $resize['maintain_ratio']= TRUE;
            $resize['width']         = 500;
            $resize['height']        = 500;           

            $this->load->library('image_lib', $resize);         
            $this->image_lib->resize();
            $data = array(
				'image' => $this->upload->data('file_name')
			);
            $this->db->where('id',$id);
			$this->db->update('user',$data);
			$this->session->set_flashdata('info', "Image has ben updated");
			redirect("user/edit/$id");
        }
	}
}
