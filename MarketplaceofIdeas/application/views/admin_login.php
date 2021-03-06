<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Login</title>
	    <script src="<?= base_url();?>/assets/js/jquery.js"></script>
	    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
		<link href="<?= base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/css/admin_login.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			/** {
				outline: 1px solid purple;
			}*/
		</style>
	</head>
<body>
<!-- Page Content -->
    <div class="container">
			<p><?= $this->session->flashdata('errors')?></p>
			    <form class="form-signin" action='login' method='post'>
			        <h2 class="form-signin-heading">Admin Log In</h2>
			        <label for="inputEmail" class="sr-only">Email address</label>
			        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			        <label for="inputPassword" class="sr-only">Password</label>
			        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      			</form>
</body>
</html>