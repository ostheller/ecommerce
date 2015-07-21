<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrative Products Dashboard</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type=""></style>
</head>
<header><--!LOAD PARTIAL/NAVBAR--></header>
<body>
	<input type='text' name='search'>
	<button>Add new product</button>
	<!-- moves to admin_add_product.php -->
	<table>
<thead><tr>
<th>Picture</th>
<th>ID</th>
<th>Name</th>
<th>Inventory Count</th>
<th>Quantity Sold</th>
<th>Action</th></tr></thead>
<!-- looking at my previouse table build out there looked like I had an extra <tr> tag - if this doesn't work revisit table construction(check:addcourses table) -->
<?//foreach($products as $product => $row_array)
//{
	//foreach($row_array as $key)
	//{
		?><!--<td><?=//$key?></td> -->
	<?}?>
	<!-- <td><a href="">edit</a>
	<a href="">delete</a></td> -->
	<!-- edit moves to admin_edit_product.php -->
	<!-- delete  -->
<?}?><!--foreach loop to poulate table with data from DB-->
</table>
<!-- Need to add a limit to how many rows are displayed in table AND create pagination links to the rest of the rows WITHOUT refreshing page-->
</body>
</html>