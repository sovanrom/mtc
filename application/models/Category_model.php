<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends MY_Model {

	public function all()
	{
		$this->load->library('datatables');
		$this->datatables->select('categories.id')
		->select('categories.name')
		->select('c.name as parent')
		->select('categories.description')
		->where('categories.status',1)
		->from('categories')
		->join('categories c', 'c.id = categories.parent', 'left');
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
	public function getCat()
	{
		$this->db->select('*');
		$this->db->from('categories');
		$this->db->where('status', 1);
		$this->db->where('parent', 0);
		return $this->db->get()->result();
	}
}