
<!doctype html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>User Shopping Cart</title>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

		<style type="text/css">
		</style>
		<script>
			  $(document).ready(function()
			  {

			  	$('#chkbox').click (function(){
  					var thisCheck = $(this);
  						if ( thischeck.is(':checked')) 
  						{
  							$("hidme").hide();
  						}
  					});
			  });	        
		</script>
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
					<td>$18.95</td>
					<td>2</td>
					<td><a href="">update</a></td>
					<td><a href="">remove</a></td>
					<td>$29.90</td>
			</tbody>
		</table>
		<button action='/'type='button'>Continue Shopping</button>
		<form action='purchases'method='post'>
			<h3>Shipping Information</h3>
			<label>First Name:</label>
			<input type='text' name='shippingfirstname:'> 
			<label>Last Name:</label>
			<input type='text' name='shippinglastname:'>
			<label>Adress:</label>
			<input type='text' name='shippingaddress:'>
			<label>Address 2:</label>
			<input type='text' name='shippingAddress_2:'>
			<label>City:</label>
			<input type='text' name='shippingCity'>
			<label>State</label>
			<select name='state'>
				
				
			</select>
			<label>Zip Code</label>
			<input type='text' name='shippingzip'>
			<h3>Billing Information</h3>
			<label>Same as Shipping address?</label>
			<input type='checkbox' id='chkbox'>
			<div id='hideme'>
				<label>First Name:</label>
				<input type='text' name='billingfirstname:'> 
				<label>Last Name:</label>
				<input type='text' name='billinglastname:'>
				<label>Adress:</label>
				<input type='text' name='billingaddress:'>
				<label>Address 2:</label>
				<input type='text' name='billingaddress_2:'>
				<label>City:</label>
				<input type='text' name='billingcity'>
				<label>State</label>
				<select>
					<option>AL</option>
					<option>AK</option>
					<option>AR</option>
					<option>AZ</option>
					<option>CA</option>
					<option>FL</option>
				</select>
				<label>Zip Code</label>
				<input type='text' name='billingzip'>
			</div>
			<label>Card Number:</label>
			<input type='text' value='ccnumber'>
			<label>Security Code:</label>
			<input type='text' value='securitycode:'>
			<label>Expiration:</label>
			<input type='text' value='expirationmonth'>
			<label>/</label>
			<input type='text' value='expirationyear'>
			<input type='hidden' value='buyit'>
			<input type='submit' value="Buy">
		 <!--  <script
		   src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		    data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
		    data-amount="2000"
		   data-name="Demo Site"
		   data-description="2 widgets ($20.00)"
		   data-image="/128x128.png">
		  </script>  --> 
		</form>


	</body>
</html>