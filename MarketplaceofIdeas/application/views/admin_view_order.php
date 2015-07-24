<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin View Order</title>
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
<body>
<div id='orderInfo'>
	<p>Order ID: <?=$billing_info['id']?></p>
	<div class='shipping'>
		<p>Customer shipping info:</p>
		<?if($shipping_info == "" )
		{?>
			<?=$shipping_info?>
		<?}
		else if($shipping_info == array())
		{?>
		<p>Name: <?=$shipping_info['name']?></p>
		<p>Address: <?=$shipping_info['address']?></p>
		<p>City: <?=$shipping_info['city']?></p>
		<p>State: <?=$shipping_info['state']?></p>
		<p>Zip: <?=$shipping_info['zip']?></p>
		<?}?>
	</div>
	<div class='billing'>
		<p>Customer billing info:</p>
		<p>Name: <?=$billing_info['name']?></p>
		<p>Address: <?=$billing_info['address']?></p>
		<p>City: <?=$billing_info['city']?></p>
		<p>State: <?=$billing_info['state']?></p>
		<p>Zip: <?=$billing_info['zip']?></p>
	</div>
</div>
<table>
<thead><tr>
<th>ID</th>
<th>Item</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th></tr></thead>
<tbody>
<?foreach($ideas as $idea)
	{?>
		<tr>
			<td><?=$idea['id']?></td>
			<td><?=$idea['name']?></td>
			<td><?=$idea['price']?></td>
			<td><?=$idea['quantity']?></td>
			<td><?=$idea['total_price']?></td>
		</tr>

	<?}?><!--foreach loop to poulate table with data from DB-->
</tbody>
</table>
<!-- if there is a large order are we going to maintain same structure of limiting displayed rows and paginate the rest of the rows? -->
<p class='status'>Status: <?=implode("",$order_status)?></p>
<div class='total'>
	<?php 
		$order_total=0;
		$price=0;
		foreach($ideas as $idea)
		{
			while ($idea == 'total_price')
			{
				$price=$idea['total_price'];
				return $price;
			}
			$order_total= $order_total+$price;	
		}?>
<!-- arg... I have been trying to get the total of the order but I'm just not doing it right and I'm to the point where I wouldn't see the right answer even if it was yelling my name :( -->
	<p>Sub total: <?="$"+$order_total?></p>
	<p>Shipping: <?="$"+$shipping?></p>
	<p>Total Price: <?="$"+$order_total+$shipping?></p>
</div>
<a href="admins_orders/sort">Return to Order's Dashboard</a>
<!-- For some reason when you click this href it sends you to admins_orders/show first!? I haven't been able to figure out why but that will throw you and error for sql because you aren't passing and id through... tried a couple work arounds but to no avail -->
</body>
</html>