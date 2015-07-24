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