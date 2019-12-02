<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("Aauth");
	}

	public function index()
	{
		if (!empty($this->input->post())) {
			$this->aauth->login($this->input->post('email'), $this->input->post('password')) ? redirect('product','refresh') : redirect('user','refresh');
		}
		$this->load->view('apps/user/login');
	}
}