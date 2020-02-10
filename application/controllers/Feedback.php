<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('feedback_model', 'feedback');
	}

	public function index()
	{
		$data['scripts'] = array('feedback');
		$data['active'] = 'feedback';
		$data['title'] = 'feedback';
		$data['content'] = 'apps/feedback/index';
		$this->load->view('app', $data);
	}
	public function get_all()
	{
		echo $this->feedback->all();
	}
	public function view($id='')
	{
		$data['feedback']= $this->feedback->get_by_id('feedbacks', $id);
		$this->load->view('apps/feedback/detail', $data);
	}
}