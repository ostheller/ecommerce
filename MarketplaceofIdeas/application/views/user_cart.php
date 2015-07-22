<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
	<head>
		<meta charset='utf-8'>
		<title>User Shopping Cart</title>

		<style type="text/css">
		</style>
	</head>
	<body>

		<table>
			<thead>
				<tr>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Socates: Drink This, Not That</td>
					<td>$19.95</td>
					<td>2</td>
					<td><a href="">update</a></td>
					<td><a href="">remove</a></td>
					<td>$29.90</td>
			</tbody>
		</table>
		<button action='/'type='button'>Continue Shopping</button>
		<form action='/ideas/purchase<' method='post'>
			<h3>Shipping Information</h3>
			<label>First Name:</label>
			<input type='text' value='First Name:'>
			<label>Last Name:</label>
			<input type='text' value='Last Name:'>
			<label>Adress:</label>
			<input type='text' value='Address:'>
			<label>Address 2:</label>
			<input type='text' value='Address 2:'>
			<label>City:</label>
			<input type='text' value='City'>
			<label>State</label>
<?php
				$query="SELECT name,id FROM state order by name"; 
				echo "<select name=state value=''>State Name</option>"; // list box select command
				foreach ($dbo->query($query) as $row)
				{//Array or records stored in $row
					echo "<option value=$row[id]>$row[name]</option>"; 
				}
				 echo "</select>";// Closing of list box
 ?>
			<label>Zip Code</label>
			<input type='text' value='Zip Code'>
			<h3>Billing Information</h3>
			<input type='checkbox' value='sameaddress'>
			<label>First Name:</label>
			<input type='text' value='First Name:'>
			<label>Last Name:</label>
			<input type='text' value='Last Name:'>
			<label>Adress:</label>
			<input type='text' value='Address:'>
			<label>Address 2:</label>
			<input type='text' value='Address 2:'>
			<label>City:</label>
			<input type='text' value='City'>
	<?php
				$query="SELECT name,id FROM state order by name"; 
				echo "<select name=state value=''>State Name</option>"; // list box select command
				foreach ($dbo->query($query) as $row)
				{//Array or records stored in $row
					echo "<option value=$row[id]>$row[name]</option>"; 
				}
				 echo "</select>";// Closing of list box
 ?>
			<label>Zip Code</label>
			<input type='text' value='Zip Code'><br>
			<!-- <label>Card Number:</label>
			<input type='text' value='ccnumber'>
			<label>Security Code:</label>
			<input type='text' value='securitycode:'>
			<label>Expiration:</label>
			<input type='text' value='expirationmonth'>
			<label>/</label>
			<input type='text' value='expirationyear'>
			<input type='hidden' value='buyit'>
			<input type='submit' value="Buy" -->
		</form>
		<form action="" method="POST">
		  <script
		    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		    data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
		    data-amount="2000"
		    data-name="Demo Site"
		    data-description="2 widgets ($20.00)"
		    data-image="/128x128.png">
		  </script>
		</form>



	</body>
</html>