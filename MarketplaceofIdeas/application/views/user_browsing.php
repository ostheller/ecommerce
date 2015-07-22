<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Browse Ideas</title>
	    <script src="<?= base_url();?>/assets/js/jquery.js"></script>
	    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
		<link href="<?= base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/css/modern-business.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			/** {
				outline: 1px solid purple;
			}*/
		</style>
	</head>
	<body>
		<?php $this->load->view('partials/user_navbar'); ?>

		<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                	<h1>Explore All Ideas</h1></div>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Browse Ideas</li></ol>
                <div>
                	<p><form class='pull-right' action='/ideas/cart' value='select'>
				    	<select>
				    		<option>Author</option>
				    		<option>Subject</option>
				    		<option>Era</option>
				    		<option>Locale</option>
				    	</select>
			
				    	<input type='hidden' value='add'>
				    	<input type='submit' value='Sort Ideas'>
			    	</form></p>
			    	<p><form id="keyword_search_form" action ='' method='post'>
						<input type='text' placeholder='Search'>
						<input type='hidden' value='search'>
						<input type='submit' value="Search">
					</form></p>
				</div>
                
            </div>
        </div>
        <!-- /.row -->
		<div class='row'>
		</div>
        <?php for($k = 0; $k < 3; $k ++) { ?>
        <!-- Projects Row -->
        <div class="row">
            <?php for($i = 0; $i<3; $i++) { ?>
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->
		<?php } ?>

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

		

	</body>
</html>