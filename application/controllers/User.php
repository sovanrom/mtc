<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['scripts'] = array('user');
		$data['active'] = 'user';
		$data['title'] = 'User';
		$data['content'] = 'apps/user/index';
		$this->load->view('app', $data);
	}

	public function all()
	{
		echo $this->user_model->all();
	}

	public function create()
	{
		if (!empty($this->input->post())) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$username = $this->input->post('username');
			$message = ($this->aauth->create_user($email, $password, $username) > 0) ? array('status' => 1) : array('status' => 0);
			echo json_encode($message);
			return '';
		}
		$this->load->view('apps/user/create');
	}

	public function edit($id)
	{
		if (!empty($this->input->post())) {
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$message = ($this->aauth->update_user($id, $email, false, $username) > 0) ? array('status' => 1) : array('status' => 0);
			echo json_encode($message);
			return '';
		}
		$data['user'] = $this->aauth->get_user($id);
		$this->load->view('apps/user/edit', $data);
	}

	public function change_password($id)
	{
		if (!empty($this->input->post())) {
			$password = $this->input->post('password');
			$message = ($this->aauth->update_user($id, false, $password, false) > 0) ? array('status' => 1) : array('status' => 0);
			echo json_encode($message);
			return '';
		}
		$data['user_id'] = $id;
		$this->load->view('apps/user/change_password', $data);
	}

	public function logout()
	{
		$this->aauth->logout();
		redirect('login','refresh');
	}
}