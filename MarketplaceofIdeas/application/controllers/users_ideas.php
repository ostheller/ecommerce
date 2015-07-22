<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_ideas extends CI_Controller {

	
	public function index()
	{
		$this->load->view('user_landing');
	}

	public function browsing()
	{
		$this->load->view('user_browsing');
	}

	public function show()
	{
		$this->load->view('user_show');
	}

	public function cart()
	{
		$this->load->view('user_cart');
	}
}
