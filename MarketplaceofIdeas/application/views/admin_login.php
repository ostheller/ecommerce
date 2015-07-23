<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrative Login</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type=""></style>
</head>
<body>
<h4>Admin Login Page</h4>
<p><?= $this->session->flashdata('errors')?></p>
<form action='login' method='post'>
	<label>Email:</label><input type='text' name='email' placeholer='me@me.com'>
	<label>Password:</label><input type='password' name='password'>
	<input type='submit' value='Login'>
</form>
</body>
</html>