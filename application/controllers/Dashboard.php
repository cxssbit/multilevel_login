<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->AuthModel->auth(0);
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('dashboard/dashboard');
		$this->load->view('layout/footer');
	}
}
