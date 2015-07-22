<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins_orders extends CI_Controller 
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
			redirect ('admins_orders/sort');
		}
	}
	public function search()
	{
		//needs to direct to model to apply appropriate keyword filter to obtain data that admin wants displayed
		// should work hard to get this to be an AJAX function
		$this->load->view('admin_orders_dash');//with appropriate data from model method pushed to view page
	}
	public function sort($sort_by='id', $sort_order= 'asc', $offset = 0)
	{
		$limit= 5;
		$this->load->model('admin_order');
		$results= $this->admin_order->orders_dash($limit, $offset, $sort_by, $sort_order);
		$data['orders']=$results['orders'];
		$data['num_rows']=$results['rows'];
		// double check that orders var_dumps correctly on admin_order_dash
	// ----------pagination-------------
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = site_url('admins_orders/sort/$sort_by/$sort_order');
		$config['total_rows'] = $results['num_rows'];
		$config['per_page'] = $limit;
		$congig['num_links'] = 10; //<- we may not need this...
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['sort_by'] = $sort_by;
		$data['sort_order'] = $sort_order;
		$this->load->view('admin_orders_dash', $data);
		// $this->load->view('admin_orders_dash');
	}
	public function status_update($post)
	{
		$this->load->model('admin_order');
		$this->admin_order->status($this->input->post());
		redirect ('admins_orders/sort');
	}
	public function show()
	{
		$this->load->model('admin_order');
		$orderdata=$this->admin_order->order_info($this->input->post());

		$this->load->view('admin_view_order', $orderdata);
	}

}
?>