<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('UserModel');
		$this->load->library('encryption');
		$this->AuthModel->auth(1);
		$this->form_validation->set_rules('name', 'Name', 'required|max_length[20]');
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[20]');
		$this->form_validation->set_rules('level', 'Level', 'numeric|required|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[20]');
		$this->form_validation->set_rules('confirm', 'Confirm', 'required|matches[password]');
	}

	public function index(){
		$data['user'] = $this->UserModel->getAll();
		$this->load->view('layout/header2');
		$this->load->view('user/index2',$data);
		$this->load->view('layout/footer2');
	}

	public function edit($id){
		$data['data'] = $this->UserModel->getSome($id);
		$this->load->view('layout/header2');
		$this->load->view('user/edit',$data);
		$this->load->view('layout/footer2');
		if ($this->form_validation->run()==true) {
			$data = array(
				'name'     => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'level'    => $this->input->post('level'),
				'password' => $this->encryption->encrypt($this->input->post('password'))
			);
			$this->UserModel->update($id,$data);
			$this->session->set_flashdata('info', $this->input->post('name')." has ben updated");
			redirect('user/index');
		}
	}

	public function add(){
		$this->load->view('layout/header2');
		$this->load->view('user/add');
		$this->load->view('layout/footer2');
		if ($this->form_validation->run()==true) {
			$data = array(
				'name'     => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'level'    => $this->input->post('level'),
				'password' => $this->encryption->encrypt($this->input->post('password'))
			);
			$this->UserModel->postAll($data);
			$this->session->set_flashdata('info', $this->input->post('name')." has ben added");
			redirect('user/index');
		}
	}

	public function delete($id){
		$this->session->set_flashdata('info', "Deleted");
		$this->UserModel->destroy($id);
		redirect('user/index');
	}
}
