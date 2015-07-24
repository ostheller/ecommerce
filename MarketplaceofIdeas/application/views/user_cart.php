<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Shopping Cart</title>
	    <script src="<?= base_url();?>/assets/js/jquery.js"></script>
	    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
		<link href="<?= base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/css/modern-business.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script>
			  $(document).ready(function(){
			  });	        
		</script>
		<style type="text/css">
		<style type="text/css">
        body {
            padding: 20px;
        }
        table {
          margin: 50px auto 20px;
        }
	        th {
	          padding: 5px 40px;
	          text-align: center;
	          font-size: 24px;
	        }
	        td {
	          padding: 5px 40px;
	          text-align: center;
	          font-size: 20px;
	        }
	     #shipping, #billing, #card_info, #subbtn {
	     	display: inline-block;
	     	vertical-align: top;
	     }
	     .well {
	     	margin: 30px auto;
	     }
        </style>
	</head>
	<body>
<?php $this->load->view('partials/user_navbar'); ?>
 <!-- Page Content -->
    <div class="container">
    	<!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
		        <table class="table-hover table-bordered">
					<thead>
						<tr>
							<th>Item</th>
							<th>Price</th>
							<th colspan=2>Quantity</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
				<?php $total_price = 0; 
					foreach ($all_ideas as  $idea) {?>					
					<tr>
						<td><?=$idea['name'] ?></td>
						<td>$<?=$idea['price'] ?></td>
						<form action="update/<?= $idea['id'] ?>" method="post">
							<td><textarea name="quantity" placeholder='<?=$idea['quantity'] ?>' rows="1" cols="2"></textarea>
							<small><input id="subbtn" type="submit" value="Update"></small></td>
						</form>
						<td>
							<a href="/remove/<?= $idea['id'] ?>"><i class="fa fa-fw fa-trash"></i></a>
						</td>
						<td>$<?php $total = number_format($idea['price'] * $idea['quantity'], 2);
						echo $total;?></td>
						<?php $total_price += $total;?>
					</tr>
				<?php } ?>
					<tr>
						<td colspan='4'></td>
						<td>$<?= number_format($total_price, 2)?></td>
							<?php $purchasetotal = number_format($total_price, 2); ?>
					</tr>	
					</tbody>
				</table>
			</div>
		</div>
		<div class='row'>
			<div class='col-sm-3 col-sm-offset-2' id="shipping">
				<form action='purchases'method='post'>
						<div class='row'>
						<h3>Shipping Information</h3>
					</div>
						<div class='row'>
							<label>First Name:</label>
							<input type='text' name='shippingfirstname:'> 
						</div>

						<div class='row'>
							<label>Last Name:</label>
							<input type='text' name='shippinglastname:'>
						</div>
						<div class='row'>
							<label>Adress:</label>
							<input type='text' name='shippingaddress:'>
						</div>
						<div class='row'>
						<label>Address 2:</label>
						<input type='text' name='shippingAddress_2:'>
						</div>
						<div class='row'>
						<label>City:</label>
						<input type='text' name='shippingCity'>
						</div>
						<div class='row'>
						<label>State</label>
						<select name='state'>
							<option></option>
							<?php foreach ($states as $state) {?>
								<option><?=$state['name']?></option>
							<?php }?>	
						</select>
						</div>
						<div class='row'>
						<label>Zip Code</label>
						<input type='text' name='shippingzip'>
						</div>
					</div>
					<div class='col-sm-3' id="billing">
						<div class='row'>
						<h3>Billing Information</h3>
						</div>
						<div class='row'>
						<label>Same as Shipping?</label>
						<input type='checkbox' id='chkbox'>
						</div>
						<div id='hideme'>
							<div class='row'>
								<label>First Name:</label>
								<input type='text' name='billingfirstname:'> 
							</div>
							<div class='row'>
								<label>Last Name:</label>
								<input type='text' name='billinglastname:'>
							</div>
							<div class='row'>
								<label>Adress:</label>
								<input type='text' name='billingaddress:'>
							</div>
							<div class='row'>
								<label>Address 2:</label>
								<input type='text' name='billingaddress_2:'>
							</div>
							<div class='row'>
								<label>City:</label>
								<input type='text' name='billingcity'>
							</div>
							<div class='row'>
								<label>State</label>
								<select name='state'>
									<option></option>
								<?php foreach ($states as $state) {?>
									<option><?=$state['name']?></option>
								<?php }?>	
								</select>
							</div>
							<div class='row'>
							<label>Zip Code</label>
							<input type='text' name='billingzip'>
						</div>
					</div>
				</div>
				<div class='col-sm-3' id="card_info">
					<!-- <div class='row'>
						<h3>Card Information</h3>
					</div>
					<div class='row'>
						<label>Card Number:</label>
						<input type='text' placeholder=''>
					</div>
					<div class='row'>
						<label>Security Code:</label>
						<input type='text' placeholder='###'size='3'>
					</div>
					<div class='row'>
						<label>Expiration:</label>
						<input type='text' placeholder='##'size='2'>
						<label>/</label>
						<input type='text' placeholder='##' size='2'>
					</div>
					<div class='row'>
						<input type='hidden' value='buyit'>
						<input type='submit' value="Buy"> -->
				  <script
				   src="https://checkout.stripe.com/checkout.js" class="stripe-button"
				    data-key="pk_test_2x9PR3c3iakOD6QuKD9Gl2Cv"
				    data-amount=<?=$total_price * 100?>
				   data-name="Demo Site"
				   data-description="Ideas purchased"
				   data-image="/128x128.png">
				  </script>  
					</div>
				</div>
				</form>
			</div>
		</div>
		  <!-- Call to Action Section -->
     <div class="row col-md-offset-5">  
        <div class="well col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-lg btn-default btn-block" href="/browse">Back to Browse</a>
                </div>
            </div>
        </div>
    </div>
		</div>
	</body>
</html>