<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Browse Ideas</title>
	    <script src="<?= base_url();?>/assets/js/jquery.js"></script>
	    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
		<link href="<?= base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/css/modern-business.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			/** {
				outline: 1px solid purple;
			}*/
		</style>
	</head>
<header><!--LOAD PARTIAL/NAVBAR--></header>
<body>
<form action='search' method='post'>
<input type='text' name='search'>
<input type='submit' value='SEARCH'> 
</form>
<!-- need to be able to search by all fields displayed in tablein -->
<table>
<thead><tr>
<th>Order ID</th>
<th>Name</th>
<th>Date</th>
<th>Billing Address</th>
<th>Total</th>
<th>Status</th></tr></thead>
<!-- looking at my previouse table build out there looked like I had an extra <tr> tag - if this doesn't work revisit table construction(check:addcourses table) -->
<?//foreach($orders as $order => $row_array)
//{
	//foreach($row_array as $key)
	//{
		?><!--<td><?//$key?></td> -->
	<?//}?>
	<!-- <td><select>
		<option>Order in process</option>
		<option>Shipped</option>
		<option>Cancelled</option>
	</select></td> -->
<?//}?><!--foreach loop to poulate table with data from DB-->
</table>
<!-- Need to add a limit to how many rows are displayed in table AND create pagination links to the rest of the rows -->
</body>
</html>