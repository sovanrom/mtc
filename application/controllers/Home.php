<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
		$data['new_products'] = $this->get_new_product();
		$this->load->view('theme',$data);
	}
	protected function get_new_product()
	{
		$this->db->select('*')	
				 ->from('products')
				 ->where('status', 1)
				 ->where('is_new', 1);
		return $this->db->get()->result();
	}
	
}