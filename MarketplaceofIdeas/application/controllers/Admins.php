<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller 
{
	public function index()
	{
		$this->load->view('admin_login');
	}
	public function login()
	{
		if($this->session->flashdata['errors'] != NULL)
		{

		}
		else
		{
			$this->load->view('admin_orders_dash');
		}
	}	
}
?>