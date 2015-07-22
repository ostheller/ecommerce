<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrative Order View</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type=""></style>
</head>
<header><--!LOAD PARTIAL/NAVBAR--></header>
<body>
<div id='orderInfo'>
	<p>Order ID: <?=?></p>
	<div class='shipping'>
		<p>Customer shipping info:</p>
		<p>Name: <?=?></p>
		<p>Address: <?=?></p>
		<p>City: <?=?></p>
		<p>State: <?=?></p>
		<p>Zip: <?=?></p>
	</div>
	<div class='billing'>
		<p>Customer billing info:</p>
		<p>Name: <?=?></p>
		<p>Address: <?=?></p>
		<p>City: <?=?></p>
		<p>State: <?=?></p>
		<p>Zip: <?=?></p>
	</div>
</div>
<table>
<thead><tr>
<th>ID</th>
<th>Item</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th></tr></thead>
<?//foreach($order as $product => $row_array)
//{
	//foreach($row_array as $key)
	//{
		?><!--<td><?=//$key?></td> -->
	<?//}
//}?><!--foreach loop to poulate table with data from DB-->
</table>
<!-- if there is a large order are we going to maintain same structure of limiting displayed rows and paginate the rest of the rows? -->
<p class='status'>Status: <??></p>
<div class='total'>
	<p>Sub total: <??></p>
	<p>Shipping: <??></p>
	<p>Total Price: <??></p>
</div>
<a href="admins_orders/sort">Return to Order's Dashboard</a>
</body>
</html>