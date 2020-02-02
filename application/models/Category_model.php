<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends MY_Model {

	public function all()
	{
		$this->load->library('datatables');
		$this->datatables->select('id')
		->select('name')
		->select('description')
		->where('status',1)
		->from('categories');
		$this->datatables->add_column(
			"Actions",
			"<div class='text-center'>
				<div class='btn-group'>
					<a href='" . base_url('category/edit/$1') . "' class='edit tip btn btn-warning btn-xs' title='update'><i class='fa fa-edit'></i></a>
				</div>
			</div>",
			"id"
		);
		$this->datatables->unset_column('id');
		return $this->datatables->generate();
	}
}