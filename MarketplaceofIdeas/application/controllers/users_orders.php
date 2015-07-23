<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_orders extends CI_Controller {

	/*   Question - would this page ever be used to initially open the
					Marketplace of Ideas User_laning page?  */
	public function index()
	{
		$this->load->user_order;
		$results=$this->user_order->state_grab();
		//$this->load->view('user_cart');
	}


	/*   This page is identical to the admin order page.
			for the user it's called and the user is 
			redirected to this page when they successfully
			purchase their order   */
	public function Confirm_order()
	{
		$this->load->view('User_order_confirm');
	}


		/*  EVENTS to trigger this function should be:
		Shopping Cart on User_Landing Page, 
		Shopping Cart on User_Browser Page,   */
	public function cart()
	{
		$this->load->model('user_order');
		$state['state'] = $this->user_order->state_grab();
		$this->load->view('user_cart', $state); 

		// var_dump($product);
		//  die('controller');
	}

	public function purchases()
	{
		$this->user_order->purchase($this->load->post());
	}	

}
