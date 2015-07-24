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
			  	$('#del').on('click', function () {
			        return confirm('Are you sure?');
			    	});
			  });	        
		</script>

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
	     
	     #card_info {
	     	margin-top: 25px; 
	     }

	     .well {
	     	margin: 30px auto;
	     }
        </style>
        <script>
        $('#del').confirm({
			});
        </script>
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
							<a id="del" href="/remove/<?= $idea['id'] ?>"><i class="fa fa-fw fa-trash"></i></a>
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
				<form action='/address/shipping'method='post'>
						<div class='row'>
						<h3>Shipping Information</h3>
					</div>
						<div class='row'>
							<label>First Name:</label>
							<input type='text' name='shippingfirstname' placeholder="<?php if (isset($same['shippingfirstname'])) {echo $same['shippingfirstname'];}?>"> 
						</div>

						<div class='row'>
							<label>Last Name:</label>
							<input type='text' name='shippinglastname' placeholder="<?php if (isset($same['shippinglastname'])) {echo $same['shippinglastname'];}?>">
						</div>
						<div class='row'>
							<label>Adress:</label>
							<input type='text' name='shippingaddress'>
						</div>
						<div class='row'>
						<label>Address 2:</label>
						<input type='text' name='shippingaddress2'>
						</div>
						<div class='row'>
						<label>City:</label>
						<input type='text' name='shippingcity'>
						</div>
						<div class='row'>
						<label>State</label>
						<select name='shippingstate'>
							<option></option>
							<?php foreach ($states as $state) {?>
								<option value='<?=$state['id']?>'><?=$state['name']?></option>
							<?php }?>	
						</select>
						</div>
						<div class='row'>
						<label>Zip Code</label>
						<input type='text' name='shippingzip'>
						</div>
						<input type="submit" value="submit">
					</div>
				</form>
					<div class='col-sm-3' id="billing">
						<div class='row'>
						<h3>Billing Information</h3>
						</div>
					<form action='/address/same'method='post'>
						<div class='row'>
							<label>Same as Shipping?</label>
							<input name="chkCopy" id='checkme'type="checkbox" value="true"> 
							<input type="submit"> 
						</div>
					</form action='/address/billing'method='post'>
					<form>
						<div id='hideme'>
							<div class='row'>
								<label>First Name:</label>
								<input type='text' name='billingfirstname' placeholder="<?php if (isset($same['shippingfirstname'])) {echo $same['shippingfirstname'];}?>"> 
							</div>
							<div class='row'>
								<label>Last Name:</label>
								<input type='text' name='billinglastname' placeholder="<?php if (isset($same['shippinglastname'])) {echo $same['shippinglastname'];}?>">
							</div>
							<div class='row'>
								<label>Adress:</label>
								<input type='text' name='billingaddress' placeholder="<?php if (isset($same['shippingaddress'])) {echo $same['shippingaddress'];}?>">
							</div>
							<div class='row'>
								<label>Address 2:</label>
								<input type='text' name='billingaddress2' placeholder="<?php if (isset($same['shippingaddress2'])) {echo $same['shippingaddress2'];}?>">
							</div>
							<div class='row'>
								<label>City:</label>
								<input type='text' name='billingcity' placeholder = "<?php if (isset($same['shippingcity'])) {echo $same['shippingcity'];}?>">
							</div>
							<div class='row'>
								<label>State</label>
								<select name='billingstate'>
									<option></option>
								<?php foreach ($states as $state) {?>
									<option value="<?=$state['id']?>"><?=$state['name']?></option>
								<?php }?>	
								</select>
							</div>
							<div class='row'>
							<label>Zip Code</label>
							<input type='text' name='billingzip'>
							</div>
							<input type="submit" value='submit'>
						</div>
					</form>
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
					<?php require 'vendor/autoload.php'; 
					$stripe = array(
					  "secret_key"      => "sk_test_mkGsLqEW6SLnZa487HYfJVLf",
					  "publishable_key" => "pk_test_czwzkTp2tactuLOEOqbMTRzG"
					);

					Stripe::setApiKey($stripe['secret_key']);?>
				  <form action="/submit_payment" method="POST">
				  	<script
						src="https://checkout.stripe.com/checkout.js" class="stripe-button"
					    data-key="pk_test_2x9PR3c3iakOD6QuKD9Gl2Cv"
					    data-amount=<?=$total_price * 100?>
					   	data-name="Marketplace of Ideas"
					   	data-description="Ideas purchased"
					   	data-image="assets/img/aurelius.png"> 
				  	</script> 
				  </form> 
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