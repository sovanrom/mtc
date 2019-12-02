<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->db->select('id')
		->select('category')
		->select('name')
		->select('price')
		->select('description')
		->from('products');
  //           ->join('product_prices', 'product_prices.product_id = products.id and product_prices.status=1')
  //           ->join('prices', 'prices.id = product_prices.price and prices.status =1')
  //           ->join('item_sizes', 'item_sizes.id = product_prices.size and item_sizes.status =1')
		// ->join('categories', 'categories.id = products.category_id')
  //           ->where('products.status', 1)
  //           ->where('products.is_setmenu', 0)
		// ->where('categories.status', 1);
		// $data['product_menu_list'] = $this->db->get()->result();

		// $data['parent'] = $this->get_category_parent();

		// $data['giftcards'] = $this->get_giftcard();

		// $data['promotions'] = $this->get_promotion();

		// $data['deliveries'] = $this->get_deliveries();

		// $data['isnew_promotions'] = $this->get_isnew_promotion();		

		// $data['about'] = $this->get_about();

		$this->load->view('theme');
	}

	// protected function get_category_parent()
	// {
	// 	$this->db->select('id, name')
	// 	->from('categories')
	// 	->where('parent', 0)
	// 	->where('status', 1);
	// 	return $this->db->get()->result();
	// }

	// protected function get_giftcard()
	// {
	// 	$this->db->select('id, name, description, image')
	// 	->from('condition_uses')
	// 	->where('status', 1);
	// 	return $this->db->get()->result();
	// }

	// protected function get_promotion()
	// {
	// 	$this->db->select('promotions.id')
	// 	->select('products.image')
	// 	->from('promotions')
	// 	->join('products', 'products.id = promotions.menu_id')
	// 	->where('promotions.is_new', 0)
	// 	->where('products.is_setmenu', 1)
	// 	->where('promotions.status', 1);
	// 	return $this->db->get()->result();
	// }

	// protected function get_isnew_promotion()
	// {
	// 	$this->db->select('promotions.id')
	// 	->select('products.image')
	// 	->from('promotions')
	// 	->join('products', 'products.id = promotions.menu_id')
	// 	->where('products.is_setmenu', 1)
	// 	->where('promotions.is_new', 1)
	// 	->where('promotions.status', 1);
	// 	return $this->db->get()->result();
	// }

	// protected function get_about()
	// {
	// 	$this->db->select('id, type_id, description, image')
	// 	->from('abouts')
	// 	->where('status', 1)
	// 	->order_by('id', 'ASC');
	// 	return $this->db->get()->result();
	// }


	// public function manager()
	// {
	// 	$data['content'] = 'apps/content';
	// 	$this->load->view('app', $data);
	// }

	// protected function get_deliveries(){
	// 	$this->db->select('*')
	// 	->from('deliveries');
	// 	return $this->db->get()->result();
	// }
}