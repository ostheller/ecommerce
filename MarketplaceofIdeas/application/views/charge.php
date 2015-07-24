<?php
	  require_once('vendor/stripe/stripe-php/config.php');

	  $token  = $_POST['stripeToken'];

	  $customer = \Stripe\Customer::create(array(
	      'email' => 'customer@example.com',
	      'card'  => $token
	  ));

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

	  echo '<h1>Successfully charged $50.00!</h1>';
?>