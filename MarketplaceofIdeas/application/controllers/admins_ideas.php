<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins_ideas extends CI_Controller 
{
	public function index()
	{
		redirect ('admins_ideas/sort_ideas');
	}
	public function search()
	{
		//directs to model to apply appropriate keyword filter to obtain data that admin wants displayed
		// should work hard to get this to be an AJAX function
		$this->load->view('admin_products_dash');//with appropriate data from model method pushed to view page
	}
	public function sort_idea($sort_by='id', $sort_order= 'asc', $offset = 0)
	{
		$limit= 5;
		$results= $this->admin_idea->products_dash($limit, $offset, $sort_by, $sort_order);
		$data['products']=$results['products'];
		$data['num_rows']=$results['rows'];
		// double check that orders var_dumps correctly on admin_order_dash
	// ----------pagination-------------
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = site_url('admins_ideas/sort/$sort_by/$sort_order');
		$config['total_rows'] = $results['num_rows'];
		$config['per_page'] = $limit;
		// $congig['num_links'] = 10; //<- we may not need this...
		$config['uri_segment'] = 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['sort_by'] = $sort_by;
		$data['sort_order'] = $sort_order;
		$this->load->view('admin_products_dash', $data);
		// $this->load->view('admin_products_dash');
	}
	public function add()
	{
		// $this->input->post()
	}

}
?>