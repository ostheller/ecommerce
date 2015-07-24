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
        </style>
        <script>
        $('#del').confirm({
			});
        </script>
	</head>
	<body>
<!-- Navigation -->
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
            <a class="navbar-brand" href="/clear">The Marketplace of Ideas</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/clear">Shopping Cart ( )</a>
                </li>
                <!-- <li>
                    <a href="contact.html">Credits</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="portfolio-1-col.html">1 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-2-col.html">2 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-3-col.html">3 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-4-col.html">4 Column Portfolio</a>
                        </li>
                        <li>
                            <a href="portfolio-item.html">Single Portfolio Item</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="blog-home-1.html">Blog Home 1</a>
                        </li>
                        <li>
                            <a href="blog-home-2.html">Blog Home 2</a>
                        </li>
                        <li>
                            <a href="blog-post.html">Blog Post</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="full-width.html">Full Width Page</a>
                        </li>
                        <li>
                            <a href="sidebar.html">Sidebar Page</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="pricing.html">Pricing Table</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
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
							<th>Quantity</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
				<?php $total_price = 0; 
					foreach ($all_ideas as  $idea) {?>					
					<tr>
						<td><?=$idea['name'] ?></td>
						<td>$<?=$idea['price'] ?></td>
						<td><?=$idea['quantity'] ?></td>
						<td>$<?php $total = number_format($idea['price'] * $idea['quantity'], 2); echo $total;?></td>
						<?php $total_price += $total;?>
					</tr>
				<?php } ?>
					<tr>
						<td colspan='3'></td>
						<td>$<?= number_format($total_price, 2)?></td>
							<?php $purchasetotal = number_format($total_price, 2); ?>
					</tr>	
					</tbody>
				</table>
				<?php if(isset($message)) {echo $message;}?>
			</div>
		</div>
	</div>
</body>
</html>