<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends MY_Model {

	public function all()
	{
		$this->load->library('datatables');
		$this->datatables->select('orders.id')
		->select('orders.order_name')
		->select('orders.phone')
		->select('orders.qty')
		->select('orders.date')
		->select('products.code')
		->select('products.price')
		->select('products.description')
		->select('orders.status')
		->from('orders')
		->join('products', 'products.id = orders.product_id');
		$action='<div class="btn-group">
	                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
	                            Action <span class="caret"></span>
	                        </button>
	                        <ul class="dropdown-menu dropdown-default pull-right" role="menu">
	                            <li>
	                                <a href="order/status/$1" . " class="change" rel="create" title="Change Status"><i class="entypo-bookmarks"></i>
	                                        Change Status </a>
	                            </li>
	                            <li class="divider"></li>
	                                                                
	                            <!-- VIEWING LINK -->
	                            <li>
	                                <a href="order/view/$1" . " class="view" rel="view" title="view"><i class="entypo-credit-card"></i>
	                                        View Order </a>
	                                            </li>
	                            <li class="divider"></li>
	                            
	                            <!-- EDITING LINK -->
	                            <li>
	                                <a href="order/edit/$1" . " class="edit" rel="edit"  title="edit"><i class="entypo-pencil"></i>
	                                    Edit </a>
	                            </li>
	                        </ul>';
			$actions = $action;	
		$this->datatables->add_column(
					"actions",
					"<div class='text-center'>
						<div class='btn-group'>
							".$actions."
						</div>
					</div>",
					"id"
				);
		$this->datatables->unset_column('id');
		return $this->datatables->generate();
	}
	public function getStatus($id='')
	{
		$this->db->select('id')
		 		 ->select('status')
				 ->from('orders')
				 ->where('id', $id);
		return $this->db->get()->row();
	}
	public function view($id='')
	{
		$this->db->select('orders.id')
				 ->select('orders.order_name as name')
				 ->select('orders.phone')
				 ->select('orders.qty as quantity')
				 ->select('orders.date')
				 ->select('products.code')
				 ->select('products.price')
				 ->select('products.image')
				 ->from('orders')
				 ->join('products', 'products.id = orders.product_id')
				 ->where('orders.id', $id);
		return $this->db->get()->row();
	}
	public function getData($id='')
	{
		$this->db->select('orders.id')
				 ->select('orders.order_name as name')
				 ->select('orders.phone')
				 ->select('orders.qty as quantity')
				 ->select('products.code')
				 ->select('products.price')
				 ->select('products.image')
				 ->select('products.description')
				 ->from('orders')
				 ->join('products', 'products.id = orders.product_id')
				 ->where('orders.id', $id);
		return $this->db->get()->row();
	}
}