<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model', 'product');
	}

	public function index()
	{
		$data['scripts'] = array('product');
		$data['active'] = 'product';
		$data['title'] = 'Product';
		$data['content'] = 'apps/product/index';
		$this->load->view('app', $data);
	}

	public function get_all()
	{
		echo $this->product->all();
	}

	public function create()
	{
		if (!empty($this->input->post())) {
			$image = '';
			$extention = '';
			$file_name = isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : '' ;
			if ($file_name != '') {
				$extention = explode('.', $file_name);
				$extention = end($extention);
				$image = $this->input->post('code');
				move_uploaded_file($_FILES['image']['tmp_name'], './uploads/products/'. $image . '.' . $extention);	
			}
			$product = array(
				'name'          => $this->input->post('name'),
				'code'          => $this->input->post('code'),
				'price'         => $this->input->post('price'),
				'category_id'   => $this->input->post('category_id'),
				'description'   => $this->input->post('description'),
				'image'         => (($image !="") ? $image. '.'.$extention : ""),
				'created_at'    =>$this->timestamp,
				'created_by'    =>$this->user,
			);
            $message = $this->product->insert('products',$product);
            echo json_encode($message);
            return true;
		}
		$data['user'] = $this->user;
		$data['categories']=$this->product->select('categories');
		$this->load->view('apps/product/create',$data);
	}


	public function edit($id)
	{
		if (!empty($this->input->post())) {
			$image = '';
			$extention = '';
			$file_name = isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : '' ;
			if ($file_name != '') {
				$extention = explode('.', $file_name);
				$extention = end($extention);
				$image = $this->input->post('code');
				if (file_exists('uploads/products/'.$this->input->post('file_name')));
					move_uploaded_file($_FILES['image']['tmp_name'], './uploads/products/'. $image . '.' . $extention);	
			}
			
			$product = array(
				'name'          => $this->input->post('name'),
				'code'          => $this->input->post('code'),
				'price'         => $this->input->post('price'),
				'category_id'   => $this->input->post('category_id'),
				'description'   => $this->input->post('description'),
				'image'         => (($image !="") ? $image. '.'.$extention : ""),
				'updated_at'    =>$this->timestamp,
				'updated_by'    =>$this->user,
				'status'        => ($this->input->post('status') == 'on') ? 1 : 0,
				'active'        => ($this->input->post('is_active') == 'on') ? 1 : 0,
				'is_new'        => ($this->input->post('is_new') == 'on') ? 1 : 0
			);
            $message = $this->product->update('products', $product,'id', $id);
			echo json_encode($message);
			return true;
		}
		$data['user'] = $this->user;
		$data['product']= $this->product->get_by_id('products', $id);
		$data['categories']=$this->product->select('categories');
		$this->load->view('apps/product/edit', $data);
	}
}