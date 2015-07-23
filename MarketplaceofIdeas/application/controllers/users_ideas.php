<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_ideas extends CI_Controller {

	
	/* This function should only be called with the initial visit to the site
			or should have a home page link (User_landing) on the User_order 
			page? */
	public function index()
	{
		$this->load->view('user_landing');
	}

	// show all tags with a specified category on the landing page
	public function category_index($id) 
	{
		$data = $this->user_idea->category_index($id);
		$this->load->view('user_landing', array('data' => $data));
	}
	/* EVENTS to trigger this function should be:
		Keyword search
		Category selection on Browsing page
		Go Back link on User_Show Page
		Continue Shopping button on order page
		Question - Should the Go Back link go back to the same page as the show item
					was displayed on or do we refresh that category / keyword list? 
					Need to figure out how to impliment javascript history*/
	public function browsing_index()
	{
		$data = $this->user_idea->browsing_index();
		$this->load->view('user_browsing', array('data' => $data));
	}

	/* This function filters the ideas shown on the browsing page by tag */
	public function browsing_show($id) {
		$data = $this->user_idea->browsing_show($id);
		$this->load->view('user_browsing', array('data' => $data));
	}

	/*  EVENTS to trigger this function should be:
		Featured idea on User_Landing Page
		Thumbnail image on User_Browser Page
		Similar Items on the User_Show Page   */
	
	// shows ONE idea
	public function show($id)
	{
		$related = $this->user_idea->fetch_related($id);
		$datum = $this->user_idea->show($id);
		$this->load->view('user_show', array('datum' => $datum, 'related' => $related, 'defaultPics' => $images));
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
