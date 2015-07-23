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
	<form action='search' method='post'>
		<input type='text' name='search'>
		<input type='submit' value='SEARCH'> 
	</form>
	<form action='add' method='post'>
		<input type='submit' value='Add new idea'>
	<!-- moves to admin_add_product.php -->
	<table>
		<thead><tr>
		<th>Picture</th>
		<th>ID</th>
		<th>Name</th>
		<th>Inventory Count</th>
		<th>Quantity Sold</th>
		<th>Action</th></tr></thead>
		<tr>
		<th>Image</th>
		<th><a href="admins_ideas/sort_idea/'id', 
		<?if($sort_order == 'asc' && $sort_by == 'id')
		{
			echo $sort_order=='desc';
		}
		else
		{
			echo $sort_order == 'asc';
		}?>)">
		Idea ID</a></th>
		<th><a href="admins_orders/sort/name/
		<?if($sort_order == 'asc' && $sort_by =='name')
			{
				echo $sort_order =='desc';
			}
			else
			{
				echo $sort_order == 'asc';
			}?>">
			Name</th>
			<th><a href="admins_orders/sort/description/
			<?if($sort_order == 'asc' && $sort_by == 'description')
			{
				echo $sort_order='desc';
			}
			else
			{
				echo $sort_order='asc';
			}?>">
			Description</a></th>
		<th><a href="admins_orders/sort/inventory/
			<?if($sort_order == 'asc' && $sort_by == 'inventory' )
			{
				echo $sort_order='desc';
			}
			else
			{
				echo $sort_order='asc';
			}
				?>">Inventory</th>
		<th><a href="admins_orders/sort/sold/
			<?if($sort_order == 'asc' && $sort_by == 'total')
			{
				echo $sort_order == 'desc';
			}
			else
			{
				echo $sort_order == 'asc';	
			}
				?>">Total</th>

<?foreach($products as $product => $row_array)
{
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