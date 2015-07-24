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
		<input type='hidden' name='task' value='search'>
		<input type='text' name='search'>
		<input type='submit' value='SEARCH'> 
	</form>
	<form action='add' method='post'>
		<input type='hidden' name='task' value='add'>
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
		<th><a href="admins_ideas/sort_idea/id/ 
		<?//if($sort_order == 'asc' && $sort_by == 'id')
		// {
		// 	echo $sort_order=='desc';
		// }
		// else
		// {
		// 	echo $sort_order == 'asc';
		// }?>">
		Idea ID</a></th>
		<th><a href="admins_orders/sort/name/
		<?//if($sort_order == 'asc' && $sort_by =='name')
			// {
			// 	echo $sort_order =='desc';
			// }
			// else
			// {
			// 	echo $sort_order == 'asc';
			// }?>">
			Name</th>
			<th><a href="admins_orders/sort/description/
			<?//if($sort_order == 'asc' && $sort_by == 'description')
			// {
			// 	echo $sort_order='desc';
			// }
			// else
			// {
			// 	echo $sort_order='asc';
			// }?>">
			Description</a></th>
		<th><a href="admins_orders/sort/inventory/
			<?//if($sort_order == 'asc' && $sort_by == 'inventory' )
			// {
			// 	echo $sort_order='desc';
			// }
			// else
			// {
			// 	echo $sort_order='asc';
			// }
				?>">Inventory</th>
		<th><a href="admins_orders/sort/sold/
			<?//if($sort_order == 'asc' && $sort_by == 'total')
			// {
			// 	echo $sort_order == 'desc';
			// }
			// else
			// {
			// 	echo $sort_order == 'asc';	
			// }
				?>">Total Sold</th>

<?foreach($products as $product )
{?>
	<tr>
	<td><?=$products['id']?></td>
	<td><?=$products['name']?></td>
	<td><?=$products['description']?></td>
	<td><?=$products['inventory']?>
	<td><?=$products['sold']?></td>
	<td>
	<td><a href="edit/idea">edit</a>
	<a href="delete/idea">delete</a></td>
<?}?><!--foreach loop to poulate table with data from DB-->
</table>
?php if(strlen($pagination)):?>
<div>
	<p>Pages:</p><?= $pagination;?>
</div>
<?php endif; ?>
</body>
</html>