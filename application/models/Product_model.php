<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends MY_Model {

	public function all()
	{
		$this->load->library('datatables');
		$this->datatables->select('products.id')
						->select('products.code')
						->select('products.name')
						->select('price')
						->select('products.description')
						->select('categories.id as category_id')
						->where('products.status',1)
						->from('products')
				        ->join('categories', 'categories.id = products.category_id');
		$this->datatables->add_column(
			"Actions",
			"<div class='text-center'>
				<div class='btn-group'>
					<a href='" . base_url('product/edit/$1') . "' class='edit tip btn btn-warning btn-xs' title='update'><i class='fa fa-edit'></i></a>
				</div>
			</div>",
			"id"
		);
		$this->datatables->unset_column('id');
		return $this->datatables->generate();
	}
}