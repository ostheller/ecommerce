<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Orders Dashboard</title>
	    <script src="<?= base_url();?>/assets/js/jquery.js"></script>
	    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url();?>/assets/js/browse.js"></script>
        <link href="<?= base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/css/modern-business.css" rel="stylesheet" type="text/css">
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
						<li class="active">
							<a href="/admin/orders">Orders</a>
						</li>
						<li>
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
			<div class="searchForm"><form action='search' method='post' class='pull-right'>
				<input type='text' name='search'>
				<input type='submit' value='SEARCH'> 
			</form></div>
	<!-- need to be able to search by all fields displayed in tablein -->
			<div id="processForm"><form action='sort' method='post' class='pull-right'>
				<select>
					<option>Show All</option>
					<option>Processing</option>
					<option>Shipped</option>
					<option>Cancelled</option>
				</select>
			</form></div>
		<?//=var_dump($status_options);
		//die('status options?');?>
			</div>
<div class="container mainTable">
<table class="table-hover table-bordered col-sm-12 text-center">
	<thead >
		<tr class="text-center">
			<th>Order ID</th>
			<th>Name</th>
			<th>Date</th>
			<th>Billing Address</th>
			<th>Total</th>
			<th>Status</th>
		</tr>
	</thead>
	</form>
	<tbody>
<?foreach($data as $order)
{?>
	<tr>
<!-- cannot get the order['id'] to pass... getting tired is now 5 am and I am feeling like I have not made enough progress -->
	<td><a href="/admins_orders/show/<?=$order['id']?>"><?=$order['id'];?></a></td>
	<td><?=$order['name']?></td>
	<td><?=$order['date']?></td>
	<td><?=$order['billing_address']?>
	<td> $<?=$order['total']?></td>
	<td>
	<!--we could for each the select with and if statement for the case of the first one to be listed as what is set as $order['status'] and the other populate-->
	<form action='status_update' method='post'>
		<select>
			<option value='<?=$order['status']?>'><?=$order['status'];?></option>
		<?//var_dump($status_options);
			//die('rcvd?');?>
		<?foreach($status_options as $row=>$row_array)
		{
			foreach ($row_array as $key)
			{
			if($key != $order['status'])
			{?>
				<option value='<?=$key?>'><?=$key?></option>
<!--I am not sure how we can get the options to pass so that we can update the new status with the drop down menu???  -->
			<?}
			}
		}?>
		<input type='submit' value='Update'>
		</select>
	</td>
	</form>
	</tr>
<?}?>
<!--foreach loop to poulate table with data from DB-->
	</tbody>
</table>
</body>
</html>