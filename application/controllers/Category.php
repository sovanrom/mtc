<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model', 'category');
	}

	public function index()
	{
		$data['scripts'] = array('category');
		$data['active'] = 'category';
		$data['title'] = 'category';
		$data['content'] = 'apps/category/index';
		$this->load->view('app', $data);
	}

	public function get_all()
	{
		echo $this->category->all();
	}

	public function create()
	{
		if (!empty($this->input->post())) {
			$category = array(
				'name'          => $this->input->post('name'),
				'description'   => $this->input->post('description'),
			);
            $message = $this->category->insert('categories',$category);
            echo json_encode($message);
            return true;
		}
		$this->load->view('apps/category/create');
	}


	public function edit($id)
	{
		if (!empty($this->input->post())) {
			$category = array(
				'name'          => $this->input->post('name'),
				'description'   => $this->input->post('description'),
				'status'        => ($this->input->post('status') == 'on') ? 1 : 0
			);
            $message = $this->category->update('categories', $category,'id', $id);
			echo json_encode($message);
			return true;
		}
		$data['category']= $this->category->get_by_id('categories', $id);
		$this->load->view('apps/category/edit', $data);
	}
}