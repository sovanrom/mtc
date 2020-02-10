<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_model extends MY_Model {

	public function all()
	{
		$this->load->library('datatables');
		$this->datatables->select('id')
		->select('name')
		->select('phone')
		->select('feedback')
		->select('date')
		->from('feedbacks');
		$this->datatables->add_column(
			"Actions",
			"<div class='text-center'>
				<div class='btn-group'>
					<a href='" . base_url('feedback/view/$1') . "' class='view tip btn btn-primary btn-xs'>View</a>
				</div>
			</div>",
			"id"
		);
		$this->datatables->unset_column('id');
		return $this->datatables->generate();
	}
}