<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrative Orderes Dashboard</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
	select, button{
		display: block;
	}
	table{
		border-collapse: collapse;
	}
	th, td{
		border:1px solid black;
	}
	</style>
</head>
<header><!--LOAD PARTIAL/NAVBAR--></header>
<body>
<form action='search' method='post'>
<input type='text' name='search'>
<input type='submit' value='SEARCH'> 
</form>
<!-- need to be able to search by all fields displayed in tablein -->
<form action='sort' method='post'>
<select>
	<option>Show All</option>
	<option>Processing</option>
	<option>Shipped</option>
	<option>Cancelled</option>
</select>
		<?//=var_dump($status_options);
		//die('status options?');?>
<table>
	<thead>
		<tr>
<!-- if we want to add an arrow denoting asc or desc sort we can add it with css so I assume there must be away to add it to Bootstrap -->
		<th><a href="admins_orders/sort/id/, 
		<?if($sort_order == 'asc' && $sort_by == 'id')
		{
			echo $sort_order=='desc';
		}
		else
		{
			echo $sort_order == 'asc';
		}?>">
		Order ID</a></th>
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
		<th><a href="admins_orders/sort/date/
			<?if($sort_order == 'asc' && $sort_by == 'date')
			{
				echo $sort_order='desc';
			}
			else
			{
				echo $sort_order='asc';
			}?>">
			Date</a></th>
		<th><a href="admins_orders/sort/billing_address/
			<?if($sort_order == 'asc' && $sort_by == 'billing_address' )
			{
				echo $sort_order='desc';
			}
			else
			{
				echo $sort_order='asc';
			}
				?>">Billing Address</th>
		<th><a href="admins_orders/sort/total/
			<?if($sort_order == 'asc' && $sort_by == 'total')
			{
				echo $sort_order == 'desc';
			}
			else
			{
				echo $sort_order == 'asc';	
			}
				?>">Total</th>
		<th class='statusField'>Status</th>
		</tr>
	</thead></tr>
	</form>
	<tbody>
<?foreach($orders as $order)
{?>
	<tr>
<!-- cannot get the order['id'] to pass... getting tired is now 5 am and I am feeling like I have not made enough progress -->
	<td><a href="/admins_orders/show/<?=$order['id']?>"><?=$order['id']?></a></td>
	<td><?=$order['name']?></td>
	<td><?=$order['date']?></td>
	<td><?=$order['billing_address']?>
	<td><?=$order['total']?></td>
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
<?php if(strlen($pagination)):?>
<div>
	<p>Pages:</p><?= $pagination;?>
</div>
<?php endif; ?>
</body>
</html>