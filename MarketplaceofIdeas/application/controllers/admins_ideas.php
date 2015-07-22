<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins_ideas extends CI_Controller 
{
	public function index()
	{
		$this->load->view('admin_login');
	}
	public function login()
	{
		//if ($this->input->post() != NULL)
		{
			//$this->load->model();
			//$orderdata=$query RESULT_array;
			//$this->load->view('admin_orders_dash, $orderdata')
		}
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
		$this->load->view('admin_orders_dash');//with appropriate data from model method pushed to view page
	}
	public function sort()
	{

	}

}
?>