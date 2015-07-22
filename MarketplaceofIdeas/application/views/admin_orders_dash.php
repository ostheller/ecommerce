<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrative Orderes Dashboard</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type=""></style>
</head>
<header><!--LOAD PARTIAL/NAVBAR--></header>
<body>
<form action='search' method='post'>
<input type='text' name='search'>
<input type='submit' value='SEARCH'> 
</form>
<!-- need to be able to search by all fields displayed in tablein -->
<select>
	<option>Show All</option>
	<option>Shipped</option>
	<option>Cancelled</option>
</select>
<table>
	<thead>
		<tr>
		<th><a href="admins_orders/sort/id/<?=//($sort_order == 'asc' && $sort_by == 'id') ? 'desc' : 'asc';?>"></a>Order ID</th>
		<th><a href="admins_orders/sort/name/<?=//($sort_order == 'asc' && $sort_by =='name') ? 'desc' : 'asc';?>">Name</th>
		<th><a href="admins_orders/sort/date/<?=//($sort_order == 'asc' && $sort_by == 'date') ? 'desc' : 'asc';?>">Date</th>
		<th><a href="admins_orders/sort/billing_address/<?=//($sort_order == 'asc' && $sort_by == 'billing_address' ) ? 'desc' : 'asc';?>">Billing Address</th>
		<th><a href="admins_orders/sort/total/<?=//($sort_order == 'asc' && $sort_by == 'total') ? 'desc' : 'asc';?>">Total</th>
		<th>Status</th>
		</tr>
	</thead>
<!-- looking at my previouse table build out there looked like I had an extra <tr> tag - if this doesn't work revisit table construction(check:addcourses table) -->
	<tbody>
<?//foreach($orders as $order)
//{?>
	<!-- <td><a href="/admins_orders/show/<?=//$order['id']?>"><?=//$order['id']?></a></td> -->
	<!-- <td><?=//$order['name']?></td> -->
	<!-- <td><?=//$order['date']?></td> -->
	<!-- <td><?=//$order['billing_address']?></td> -->
	<!-- <td><?=//$order['total']?></td> -->
	<!-- <td><select>
		<option>Order in process</option>
		<option>Shipped</option>
		<option>Cancelled</option>
		<input type>
	</select></td> -->
<?//}?><!--foreach loop to poulate table with data from DB-->
	</tbody>
</table>
<?php if(strlen($pagination)):?>
<div>
	<p>Pages:</p><?= $pagination; ?>
</div>
</body>
</html>