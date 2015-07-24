<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins_orders extends CI_Controller 
{
	public function index()
	{
		// var_dump($this->session->flashdata);
		// die('qua?');
		if($this->session->flashdata('errors') != null)
		{
			// var_dump($errors);
			// die('got errors to index');
			$this->load->view('admin_login', $this->session->flashdata('errors'));
		}
		else
		{
			$this->load->view('admin_login');
		}
	}
	public function login()
	{
		// var_dump($this->input->post());
		// die('reached users_orders/login');
		if ($this->input->post() != NULL)
		{
			$results=$this->admin_order->login_user($this->input->post());
			//$orderdata=$query RESULT_array;
			//$this->load->view('admin_orders_dash, $orderdata')
		}
		if($this->session->flashdata('errors') != NULL)
		{
			// var_dump($this->session->flashdata('errors'));
			// die('errors?');
			$this->session->flashdata('errors');
			// var_dump($errors);
			// die('errors if before index return');
			redirect ('admin');
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

	public function sort($offset = 0)//$sort_by='id', $sort_order= 'asc',
	{
		// die('reached sort function');
		$limit= 5;
		$results=$this->admin_order->orders_dash($limit, $offset);//, $sort_by, $sort_order;
		$data['orders']=$results['orders'];
		$data['num_rows']=$results['num_rows'];
		$data['status_options']=$results['status_options'];
		// var_dump($data);
		// die('did data move back to sort???');
		// double check that orders var_dumps correctly on admin_order_dash
	// ----------pagination-------------
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = site_url('admins_orders/sort/');//$sort_by/$sort_order
		$config['total_rows'] = $results['num_rows'];
		$config['per_page'] = $limit;
		// $congig['num_links'] = 10; //<- we may not need this...
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		// $data['sort_by'] = $sort_by;
		// $data['sort_order'] = $sort_order;
		// var_dump($data);
		// die('what happens to my data!?');
		$this->load->view('admin_orders_dash', $data);
		// $this->load->view('admin_orders_dash');
	}
	public function status_update()
	{
		// var_dump($this->input->post());
		// die('reached status update');
		$this->admin_order->change_status($this->input->post());
		redirect ('admins_orders/sort');
	}
	public function show($id)
	{
		$id = (int)$id;
		// var_dump($id);
		// die('hello');
		$results=$this->admin_order->get_order($id);
		// var_dump($results);
		// die('arrays');
		$data['billing_info'] = $results['billing_info'];
		$data['shipping_info'] = $results['shipping_info'];
		// var_dump($data['shipping_info']);
		// die();
		$data['order_status'] = $results['order_status'];
		$data['ideas'] = $results['ideas'];
		$data['shipping'] = 10;
		$this->load->view('admin_view_order', $data);
	}

}
?>