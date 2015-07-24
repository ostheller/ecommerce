<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_ideas extends CI_Controller {

	
	/* This function should only be called with the initial visit to the site
			or should have a home page link (User_landing) on the User_order 
			page? */
	public function index()
	{
		if($this->session->userdata('user_id') == null) {
			$this->user_idea->new_user();
		}
		$this->user_order->cart_count();
		$this->load->view('user_landing');
	}

	// Session destroy 
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

	// show all tags with a specified category on the landing page
	public function category_index($id) 
	{
		$this->user_order->cart_count();
		$data = $this->user_idea->category_index($id);
		$this->load->view('partials/landing_category_div', array('data' => $data));
	}

	/* EVENTS to trigger this function should be:
		Keyword search
		Category selection on Browsing page
		Go Back link on User_Show Page
		Continue Shopping button on order page
		Question - Should the Go Back link go back to the same page as the show item
					was displayed on or do we refresh that category / keyword list? 
					Need to figure out how to impliment javascript history*/
	public function load_browse()
	{
		$this->user_order->cart_count();
		$all_data = $this->user_idea->browsing_index();
		$this->load->view('user_browsing', array('data' => $all_data));
	}

	public function browsing_index()
	{
		$this->user_order->cart_count();
		$all_data = $this->user_idea->browsing_index();
		$this->load->view('user_browsing', array('data' => $all_data));
	}

	/* This function filters the ideas shown on the browsing page by tag ON PAGE LOAD*/
	public function browsing_show($id) {
		$this->user_order->cart_count();
		$data_sort = $this->user_idea->browsing_show($id);
		$this->load->view('user_browsing', array('data' => $data_sort));
	}

	public function browsing_show_partial($id) {
		$this->user_order->cart_count();
		$data_sort = $this->user_idea->browsing_show($id);
		$this->load->view('partials/browse_content', array('data' => $data_sort));
	}

	public function sort_by() {
		if($this->input->post('sort') == 'byPrice') {
			redirect('ideas/byPrice');
		}
		else if ($this->input->post('sort') == 'byPopularity') {
			redirect('ideas/byPopularity');
		}
		else {
			redirect('load_browse');
		}
	}

	public function pull_by_price() {
		$this->user_order->cart_count();
		$data_price = $this->user_idea->pull_by_price();
		$this->load->view('partials/browse_content', array('data' => $data_price));
	}

	public function pull_by_sell_count() {
		$this->user_order->cart_count();
		$data_count = $this->user_idea->pull_by_sell_count();
		$this->load->view('partials/browse_content', array('data' => $data_count));
	}

	public function keyword_search()
	{
		$this->user_order->cart_count();
		$post = $this->input->post();
		$data_search = $this->user_idea->search($post);
		$this->load->view('partials/browse_content', array('data' => $data_search));

	}
	/*  EVENTS to trigger this function should be:
		Featured idea on User_Landing Page
		Thumbnail image on User_Browser Page
		Similar Items on the User_Show Page   */
	
	 //shows ONE idea
	public function show($id)
	{
		$this->user_order->cart_count();
		$related = $this->user_idea->fetch_related($id);
		$datum = $this->user_idea->show($id);
		$this->load->view('user_show', array('datum' => $datum, 'related' => $related));
	}

	public function purchase($id)
	{
		$this->user_order->purchase($id);
		$this->show($id);
	}	
	/*I wonder if the cart should be part of the orders controller instead of the ideas.
		EVENTS to trigger this function should be:
		Shopping Cart on User_Landing Page, 
		Shopping Cart on User_Browser Page,  

				MOVED TO ORDERS CONTROLLER FILE
	public function cart()
	{
		$this->load->view('user_cart');
	}
	*/
}
