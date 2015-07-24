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
	<header><!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">The Marketplace of Ideas: Administration</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Orders</a>
						</li>
						<li>
							<a href="#">Products</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/logout">Log Off</a>
						</li>
				</div>
			</nav></header>
<!-- Page Content -->
    <div class="container">
			<p><?= $this->session->flashdata('errors')?></p>
			    <form class="form-signin" action='/login' method='post'>
			        <h2 class="form-signin-heading">Admin Log In</h2>
			        <label for="inputEmail" class="sr-only">Email address</label>
			        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			        <label for="inputPassword" class="sr-only">Password</label>
			        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      			</form>
</body>
</html>