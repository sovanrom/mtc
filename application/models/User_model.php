<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends MY_Model {

	public function all()
	{
		$this->load->library('datatables');
		$this->datatables->select('id')
		->select('username')
		->select('email')
		->from('aauth_users');

		$this->datatables->add_column(
			"Actions",
			"<div class='text-center'>
				<div class='btn-group'>
					<a href='" . base_url('user_to_group/index/$1') . "' class='user-group tip btn btn-warning btn-xs' title='Assign group'><i class='fa fa-users'></i></a>
					<a href='" . base_url('user/edit/$1') . "' class='edit tip btn btn-warning btn-xs' title='update'><i class='fa fa-edit'></i></a>
					<a href='" . base_url('user/change_password/$1') . "' class='change-password tip btn btn-warning btn-xs' title='change password'><i class='fa fa-key'></i></a>
				</div>
			</div>",
			"id"
		);
		$this->datatables->unset_column('id');
		return $this->datatables->generate();
	}

}