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
                    <li class="active"><a href="/browse">Browse Ideas</a></li></ol>
                <div>
                	<p><form class='pull-right' action='/ideas/cart' value='select'>
				    	<select>
				    		<option>Author</option>
				    		<option>Subject</option>
				    		<option>Era</option>
				    		<option>Locale</option>
				    	</select>
						<select>
				    		<option></option>
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
        <!-- Projects Row -->
        <div class="row">
          <?php foreach($data as $datum) { ?>
            <div class="col-md-4 img-portfolio">
                <a href="/ideas/show/<?= $datum['id'] ?>">
                    <img class="img-responsive img-hover" src="<?= base_url();?>/assets/img/socrates.png" alt="">
                </a>
                <h3 class='text-center'>
                    <a href="/ideas/show/<?= $datum['id'] ?>"><?= $datum['name'] ?></a>
                </h3>
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->

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