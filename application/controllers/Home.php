<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		
		$data['new_products'] = $this->get_new_product();
		$data['apples'] = $this->apple();
		$data['oppos'] = $this->oppo();
		$data['vivos'] = $this->vivo();
		$data['samsungs'] = $this->samsung();
		$data['huaweis'] = $this->huawei();
		$this->load->view('theme',$data);
	}
	public function order($id='')
	{
		if (!empty($this->input->post('name'))) {
			$order = array(
				'product_id' => $this->input->post('product_id'), 
				'order_name' => $this->input->post('name'), 
				'phone' => $this->input->post('phone'), 
				'qty' => $this->input->post('qty'),
				'date' => $this->timestamp
			);
			$message= ($this->db->insert('orders', $order))?  array('status' => 1) :  array('status '=> 0 );
			echo json_encode($message);
			return '';
		}
		$this->db->select('*')
				 ->from('products')
				 ->where('id', $id);
		$data['order'] = $this->db->get()->row();
		$this->load->view('themes/contents/order', $data);
	}

	public function contact()
	{
		if (!empty($this->input->post())) {
			$feedback = array(
				'name' => $this->input->post('name'), 
				'phone' => $this->input->post('phone'), 
				'feedback' => $this->input->post('feedback'),
				'date' => $this->timestamp
			);
			$message = ($this->db->insert('feedbacks', $feedback)) ? array('status' => 1) : array('status' => 0);
			echo json_encode($message);
			return '';
		}
		$this->load->view('themes/contents/feedback');
	}

	protected function get_new_product()
	{
		$this->db->select('*')	
				 ->from('products')
				 ->where('status', 1)
				 ->where('active', 1)
				 ->where('is_new', 1);
		return $this->db->get()->result();
	}

	protected function apple()
	{
		$this->db->select('products.id')	
				 ->select('products.price')	
				 ->select('products.description')	
				 ->select('products.image')	
				 ->from('products')
				 ->where('products.status', 1)
				 ->where('products.active', 1)
				 ->where('categories.name', 'Apple')
				 ->join('categories', 'categories.id = products.category_id');
		return $this->db->get()->result();
	}

	protected function oppo()
	{
		$this->db->select('products.id')	
				 ->select('products.price')	
				 ->select('products.description')	
				 ->select('products.image')	
				 ->from('products')
				 ->where('products.status', 1)
				 ->where('products.active', 1)
				 ->where('categories.name', 'Oppo')
				 ->join('categories', 'categories.id = products.category_id');
		return $this->db->get()->result();
	}

	protected function huawei()
	{
		$this->db->select('products.id')	
				 ->select('products.price')	
				 ->select('products.description')	
				 ->select('products.image')	
				 ->from('products')
				 ->where('products.status', 1)
				 ->where('products.active', 1)
				 ->where('categories.name', 'Huawei')
				 ->join('categories', 'categories.id = products.category_id');
		return $this->db->get()->result();
	}
	protected function vivo()
	{
		$this->db->select('products.id')	
				 ->select('products.price')	
				 ->select('products.description')	
				 ->select('products.image')	
				 ->from('products')
				 ->where('products.status', 1)
				 ->where('products.active', 1)
				 ->where('categories.name', 'Vivo')
				 ->join('categories', 'categories.id = products.category_id');
		return $this->db->get()->result();
	}

	protected function samsung()
	{
		$this->db->select('products.id')	
				 ->select('products.price')	
				 ->select('products.description')	
				 ->select('products.image')	
				 ->from('products')
				 ->where('products.status', 1)
				 ->where('products.active', 1)
				 ->where('categories.name', 'Samsung')
				 ->join('categories', 'categories.id = products.category_id');
		return $this->db->get()->result();
	}

	protected function get_about()
	{
		$this->db->select('name')	
				 ->select('description')	
				 ->from('abouts')
				 ->where('status', 1)
				 ->where('name', 'Mission');
		return $this->db->get()->row();
	}
	protected function get_about1()
	{
		$this->db->select('name')	
				 ->select('description')	
				 ->from('abouts')
				 ->where('status', 1)
				 ->where('name', 'Vision');
		return $this->db->get()->row();
	}

	public function about_us()
	{
		$data['about'] = $this->get_about();
		$data['about1'] = $this->get_about1();
		$this->load->view('themes/contents/about_us',$data);
	}
}