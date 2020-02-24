<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('about_model', 'about');
	}

	public function index()
	{
		$data['scripts'] = array('about');
		$data['active'] = 'about';
		$data['user'] = $this->user;
		$data['title'] = 'about';
		$data['content'] = 'apps/about/index';
		$data['user'] = $this->user;
		$this->load->view('app', $data);
	}

	public function get_all()
	{
		echo $this->about->all();
	}

	public function create()
	{
		if (!empty($this->input->post())) {
			$about = array(
				'name'          => $this->input->post('name'),
				'description'   => $this->input->post('description'),
			);
            $message = $this->about->insert('abouts',$about);
            echo json_encode($message);
            return true;
		}
		$this->load->view('apps/about/create');
	}


	public function edit($id)
	{
		if (!empty($this->input->post())) {
			$about = array(
				'name'          => $this->input->post('name'),
				'description'   => $this->input->post('description'),
				'status'        => ($this->input->post('status') == 'on') ? 1 : 0
			);
            $message = $this->about->update('abouts', $about,'id', $id);
			echo json_encode($message);
			return true;
		}
		$data['about']= $this->about->get_by_id('abouts', $id);
		$this->load->view('apps/about/edit', $data);
	}
}