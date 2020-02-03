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
				 ->where('active', 1)
				 ->where('is_new', 1);
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