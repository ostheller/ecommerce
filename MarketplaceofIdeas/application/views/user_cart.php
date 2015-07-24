<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// var_dump($this->session->userdata('user_id'));
// die();
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
	    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
		<link href="<?= base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/css/modern-business.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script>
			  $(document).ready(function(){
			  	$('#del').on('click', function () {
			        return confirm('Are you sure?');
			    	});
			  	$('#checkme').click(function(){
	                $.get('/address/same', function(res){
	                    $('#hideme').html(res);
	                    }); 
	                });
			  	$('#shipping_form').submit(function(){
	                $.post('/address/shipping', $(this).serialize(), function(res){
	                    $('#shipping_div').html(res);
	                    }); 
	                return false;
	            });
			  });	       
		</script>

		<style type="text/css">
        body {
            padding: 20px;
        }
        table {
          margin: 80px auto 20px;
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

	     #browse {
			padding: 10px;
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
			<div class='col-sm-3 col-sm-offset-2' id="shipping_div">
				<form action='/address/shipping' id="shipping_form" method='post'>
						<div class='row'>
						<h3>Shipping Information</h3>
					</div>
						<div class='row'>
							<label>First Name:</label>
							<input type='text' name='shippingfirstname'> 
						</div>

						<div class='row'>
							<label>Last Name:</label>
							<input type='text' name='shippinglastname'>
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
						<input type="submit" value="Confirm">
					</div>
				</form>
					<div class='col-sm-3' id="billing">
						<div class='row'>
						<h3>Billing Information</h3>
						</div>
						<form action='/address/same' method='post'>
						<div class='row'>
							<label>Same as Shipping?</label>
							<input name="chkCopy" id='checkme'type="checkbox" value="true"> 
						</form>
						</div>
						<form action='/address/billing'method='post'>
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
							<input type="submit" value="Confirm">
							</form>
						</div>
					</div>
				<div class='col-sm-3' id="card_info">

				<form action="checkout" method="POST">
				<?php require_once('vendor/stripe/stripe-php/config.php'); ?>
				  	<script
						src="https://checkout.stripe.com/checkout.js" class="stripe-button"
					    data-key="pk_test_2x9PR3c3iakOD6QuKD9Gl2Cv"
					    data-amount= <?='"('.$total_price.' * 100)"'?>
					   	data-name="Marketplace of Ideas"
					   	data-description="Ideas purchased"
					   	data-image="assets/img/aurelius.png"> 
				  	</script> 
				  </form> 
				  </form>
				  <div class="row" id="browse">
                    <a class="btn btn-default" href="/browse">Back to Browse</a>
                </div>
			</div>
			</div>	
		</div>
	</div>
	</body>
</html>