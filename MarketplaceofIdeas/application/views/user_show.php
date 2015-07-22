<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>  <!-- Echo Product Title HERE -->
	    <script src="<?= base_url();?>/assets/js/jquery.js"></script>
	    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
		<link href="<?= base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/css/modern-business.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php $this->load->view('partials/user_navbar'); ?>
		<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><!-- Echo Product Title HERE -->
                    <small><!-- Echo Subject HERE --></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="/browse">Browse Ideas</a>
                    </li>
                    <li class="active"><!-- Echo Product Title HERE --></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
<!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h2>Description</h2>
                <p><!-- Echo Description HERE --></p>
                <h3>Some Major Authors</h3>
                <ul>
                    <li><!-- Select authors with this idea HERE --></li>
                </ul>
                <form action='/ideas/cart' value='select'>
			    	<select>
			    		<option>1($19.95)</option>
			    		<option>2($37.95)</option>
			    		<option>3($55.95)</option>
			    		<option>4($73.95)</option>
			    	</select>
			    	<input type='hidden' value='add'>
			    	<input type='submit' value='Add to Cart'>
			    </form>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Ideas Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Ideas</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ideas/show/(<!-- Select authors with this idea HERE -->)">
                    <img class="img-responsive img-hover img-related" src="http://www.philosophers.co.uk/immanuel-kant.jpg" alt="<!-- Select authors with this idea HERE -->">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ideas/show/(<!-- Select authors with this idea HERE -->)">
                    <img class="img-responsive img-hover img-related" src="http://www.philosophers.co.uk/immanuel-kant.jpg" alt="<!-- Select authors with this idea HERE -->">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ideas/show/(<!-- Select authors with this idea HERE -->)">
                    <img class="img-responsive img-hover img-related" src="http://www.philosophers.co.uk/immanuel-kant.jpg" alt="<!-- Select authors with this idea HERE -->">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ideas/show/(<!-- Select authors with this idea HERE -->)">
                    <img class="img-responsive img-hover img-related" src="http://www.philosophers.co.uk/immanuel-kant.jpg" alt="<!-- Select authors with this idea HERE -->">
                </a>
            </div>

        </div>
        <!-- /.row -->
	</body>
</html>