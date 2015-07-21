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
		//if $this->input->post() exists send to model method to validate and login or send back errors
		if($this->session->flashdata['errors'] != NULL)
		{
			// send errors from model form validation to the admin_login
		}
		else
		{
			$this->load->view('admin_orders_dash');
		}
	}
	public function search()
	{
		//directs to model to apply appropriate keyword filter to obtain data that admin wants displayed
		// should work hard to get this to be an AJAX function
		$this->load->view('admin_orders_dash');//with appropriate data pushed
	}

}
?>