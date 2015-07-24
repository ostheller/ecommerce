<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin View Product</title>
	    <script src="<?= base_url();?>/assets/js/jquery.js"></script>
	    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
		<link href="<?= base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/css/admin_login.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			select, button{
				display: block;
			}

	        table {
	          margin-top: 20px;
	        }
	        th {
	          padding: 5px 40px;
	          text-align: center;
	        }
	        td {
	          padding: 5px 40px;
	          text-align: center;
        }
			#tools {
                margin: 20px 0px 0px 0px;
            }
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
            <a class="navbar-brand" href="/admin">The Marketplace of Ideas</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="/admin/orders">Orders</a>
						</li>
						<li class="active">
							<a href="/admin/products">Products</a>
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
	    	<div class="col-sm-12" id="tools">
				<form action='search' method='post' class='pull-right'>
					<input type='hidden' name='task' value='search'>
					<input type='text' name='search'>
					<input type='submit' value='SEARCH'> 
				</form>
			</div>
			<div>
				<form action='add' method='post' class='pull-right'>
					<input type='hidden' name='task' value='add'>
					<input type='submit' value='Add new idea'>
				</form>
			</div>
		</div>
		<!-- moves to admin_add_product.php -->
		<div class="container mainTable">
			<table class="table-hover table-bordered col-sm-12 text-center">
				<thead >
				<tr class="text-center">
					<th>Picture</th>
					<th>ID</th>
					<th>Name</th>
					<th>Inventory Count</th>
					<th>Quantity Sold</th>
					<th colspan="2">Action</th>
				</tr>
				</thead>
				<tbody>
				<?foreach($data as $products)
				{?><tr>
					<td><img src="<?= base_url();?>/assets/img/placeholder.png"></td>
					<td><?=$products['id']?></td>
					<td><?=$products['name']?></td>
					<td><?=$products['inventory']?>
					<td><?=$products['sold']?></td>
					<td><a href="/edit/<?=$products['id']?>">edit</a></td>
					<td><a href="/delete/<?=$products['id']?>">delete</a></td>
				</tr>
				<?}?></tbody>
			</table>
		</div>
	</div>
</body>
</html>