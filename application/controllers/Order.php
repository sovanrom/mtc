<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('order_model', 'order');
	}

	public function index()
	{
		$data['scripts'] = array('order');
		$data['active'] = 'order';
		$data['title'] = 'order';
		$data['content'] = 'apps/order/index';
		$this->load->view('app', $data);
	}

	public function get_all()
	{
		echo $this->order->all();
	}	
	
	public function status($id='')
	{

		if (!empty($this->input->post())) {
			$order = array(
				'status' => $this->input->post('status')
			);
			$messsage = ($this->order->update('orders', $order ,'id', $id))? array('status' => 1 ):  array('status' => 0 );
			echo json_encode($messsage);
			return '';
		}	
		$data['order'] = $this->order->getStatus($id);
		$this->load->view('apps/order/status', $data);
	}
	public function view($id='')
	{
		$data['order'] = $this->order->view($id);
		$this->load->view('apps/order/view', $data);
	}
	public function edit($id='')
	{
		if (!empty($this->input->post())) {
			$order = array(
				'order_name' => $this->input->post('name'), 
				'qty' => $this->input->post('qty'), 
				'phone' => $this->input->post('phone')
			);
			$messsage = ($this->order->update('orders', $order ,'id', $id))? array('status' => 1 ):  array('status' => 0 );
			echo json_encode($messsage);
			return '';
		}
		$data['order'] = $this->order->getData($id);
		$this->load->view('apps/order/edit', $data);
	}
}