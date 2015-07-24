<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_orders extends CI_Controller {

		/*  EVENTS to trigger this function should be:
		Shopping Cart on User_Landing Page, 
		Shopping Cart on User_Browser Page,   */
	public function index()
	{
		$ideas = $this->user_order->idea_grab();
		$state = $this->user_order->state_grab();
		$this->user_order->cart_count();
		$this->load->view('user_cart', array('states' => $state, 'all_ideas' => $ideas)); 

		// var_dump($product);
		//  die('controller');
	}

	public function destroy($id)
	{
		$this->user_order->destroy($id);
		redirect('users_orders/index');
	}

	public function update($id)
	{
			$post = $this->input->post();
			$this->user_order->update($post, $id);
			redirect('/cart');
	}

	public function submit_payment()
	{
		// Set your secret key: remember to change this to your live secret key in production
		// See your keys here https://dashboard.stripe.com/account/apikeys
		\Stripe\Stripe::setApiKey("sk_test_7NlolFaIBOfT65JPmcmtHFEH");

		// Get the credit card details submitted by the form
		$token = $_POST['stripeToken'];

		// Create the charge on Stripe's servers - this will charge the user's card
		try {
		$charge = \Stripe\Charge::create(array(
		  "amount" => 1000, // amount in cents, again
		  "currency" => "usd",
		  "source" => $token,
		  "description" => "Example charge")
		);
		} catch(\Stripe\Error\Card $e) {
		  // The card has been declined
		}
	}

	public function address_shipping(){
		$post = $this->input->post();
		$this->user_order->checkout_shipping($post);
		$ideas = $this->user_order->idea_grab();
		$state = $this->user_order->state_grab();
		$this->user_order->cart_count();
		$this->load->view('user_cart', array('states' => $state, 'all_ideas' => $ideas, 'same' => $data)); 
	}

	public function same_as_billing(){
		$data = $this->user_order->pull_address();
		$ideas = $this->user_order->idea_grab();
		$state = $this->user_order->state_grab();
		$this->user_order->cart_count();
		$this->load->view('user_cart', array('states' => $state, 'all_ideas' => $ideas, 'same' => $data)); 
	}

	public function address_billing(){
		$post = $this_input_post();
		$this->user_order->checkout_billing($post);
		redirect('/cart');
	}

/*   This page is identical to the admin order page.
			for the user it's called and the user is 
			redirected to this page when they successfully
			purchase their order   */
	public function confirm_order()
	{
		$this->load->view('User_view_order');
	}

	//this posts addresses to database before posting charges to Stripe
	public function checkout()
	{
		
		$this->user_order->checkout();
		$this->load->view('User_view_order');
	}


}
