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
		require_once('vendor/stripe/stripe-php/config.php');
		$items = $this->user_order->idea_grab();
		$post = $this->input->post();
		// Create the charge on Stripe's servers - this will charge the user's card
			try {
			$charge = \Stripe\Charge::create(array(
			  "amount" => 1000, // amount in cents, again
			  "currency" => "usd",
			  "source" => $post['stripeToken'],
			  "description" => "Example charge")
				);
				$message = '<h2 class="text-center">Thank you for shopping with us!</h2> <h4 class="text-center">Expect to see your items shortly!</h4><p class="text-center"><a href="/clear">Back to Browse</a></p>';
				$this->user_order->insert_token($post);
			} catch(\Stripe\Error\Card $e) {
			  $message = 'Card declined';
			}
		$ideas = $this->user_order->idea_grab();
		$state = $this->user_order->state_grab();
		$this->user_order->cart_count();
		$this->load->view('user_view_order', array('message' => $message, 'states' => $state, 'all_ideas' => $ideas));
	}

	public function clear() 
	{
		$this->user_order->clear_cart();
		redirect('/');
	}

	public function address_shipping(){
		$post = $this->input->post();
		$this->user_order->checkout_shipping($post);
		$data = $this->user_order->pull_address();
		$this->load->view('partials/shipping_checkout_form', array('address' => $data));

	}

	public function same_as_billing(){
		$data = $this->user_order->pull_address();
		$this->user_order->same_address();
		$this->load->view('partials/billing_checkout_form', array('same' => $data));
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
