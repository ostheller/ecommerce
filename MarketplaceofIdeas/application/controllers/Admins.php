<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller 
{
	public function index()
	{
		$this->load->view('admin_login');
	}
	public function login()
	{

	}	
}
?>