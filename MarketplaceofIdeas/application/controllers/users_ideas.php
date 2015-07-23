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


	/* EVENTS to trigger this function should be:
		Keyword search
		Category selection on Browsing page
		Go Back link on User_Show Page
		Continue Shopping button on order page
		Question - Should the Go Back link go back to the same page as the show item
					was displayed on or do we refresh that category / keyword list? 
					Need to figure out how to impliment javascript history*/
	public function browsing()
	{
		$this->load->view('user_browsing');
	}



	/*  EVENTS to trigger this function should be:
		Featured idea on User_Landing Page
		Thumbnail image on User_Browser Page
		Similar Items on the User_Show Page   */
	public function show()
	{
		$this->load->view('user_show');
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
