<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Marketplace of Ideas</title>
	    <script src="<?= base_url();?>/assets/js/jquery.js"></script>
	    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
		<link href="<?= base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/css/modern-business.css" rel="stylesheet" type="text/css">
		<link href="<?= base_url();?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script>
		$(document).ready(function() {
		    $('carousel').carousel({
		        interval: 2000 //changes the speed
		    });
            // $('.authors').on('click', (function(){
            //     $.get('category/author', function(res){
            //         $('#category_sort').load(res);
            //         }); 
            //     });
            //  $('.subjects').click(function(){
            //     $.get('category/author', function(res){
            //         $('#category_sort').load(res);
            //         }); 
            //     });
            //   $('.eras').click(function(){
            //     $.get('category/author', function(res){
            //         $('#category_sort').load(res);
            //         }); 
            //     });
            //    $('.locations').click(function(){
            //     $.get('category/author', function(res){
            //         $('#category_sort').load(res);
            //         }); 
            //     });
            });
    	</script>
	</head>
	<body>
<?php $this->load->view('partials/user_navbar'); ?>
<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?= base_url();?>/assets/img/socrates.png');"></div>
                <div class="carousel-caption">
                    <a class="primary_link" href="/ideas/show/31"><h2>Virtue Ethics</h2></a>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?= base_url();?>/assets/img/diogenes.jpg');"></div>
                <div class="carousel-caption">
                    <a class="primary_link" href="/ideas/show/7"><h2>Cynicism</h2></a>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?= base_url();?>/assets/img/wanderer.jpg');"></div>
                <div class="carousel-caption">
                    <a class="primary_link" href="/ideas/show/16"><h2>Romanticism</h2></a>
                </div>
            </div>
        </div>
 	<!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

    <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">
                    The Marketplace of Ideas
                </h1>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-users"></i> Author</h4>
                    </div>
                    <div class="panel-body">
                        <div class="thumbnail">
                        <img alt="Raphael's School of Athens" src="<?= base_url();?>/assets/img/school_of_athens.jpg" />
                    </div>
                        <p>A philosopher, in a broad sense, is someone who studies philosophy. The word "philosopher" comes from the Ancient Greek φιλόσοφος (philosophos), which means "lover of wisdom". The introduction of the terms "philosopher" and "philosophy" has been ascribed to the Greek thinker Pythagoras.</p>
                        <a href="/category/author" class="btn btn-default authors">View Authors</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-book"></i> Subject</h4>
                    </div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <img alt="Old books" src="<?= base_url();?>/assets/img/subjects.jpg" />
                        </div>
                        <p>Philosophy is the study of general and fundamental problems, such as those connected with reality, existence, knowledge, values, reason, mind and language. There are five main branches: epistemology, ethics, aesthetics, metaphysics and politics.
                        </p>
                        <a href="/category/subject" class="btn btn-default subjects">View Subjects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-bell"></i> Era</h4>
                    </div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <img alt="A 18th century French Enlightenment salon" src="<?= base_url();?>/assets/img/salon.jpg" />
                        </div>
                        <p>All cultures — be they prehistoric, medieval, or modern; Eastern, Western, religious or secular — have had their own unique schools of philosophy, arrived at through both inheritance and through independent discovery. </p>
                        <a href="/category/era" class="btn btn-default eras">View Eras</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-university"></i> Locale</h4>
                    </div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <img alt="The Parthenon in Athens" src="<?= base_url();?>/assets/img/parthenon.jpg" />
                        </div>
                        <p>Many societies have considered philosophical questions and built philosophical traditions based upon each other's works. This small project focuses on Western thinkers and the Western tradition of philosophy, but truely the pursuit of knowledge is a characteristically human behavior that transcends national boundaries. </p>
                        <a href="/category/location" class="btn btn-default locations">View Locations</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

         <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>As a method, philosophy is often distinguished from other ways of addressing such problems by its questioning, critical, generally systematic approach and its reliance on rational argument. It is also fun and interesting!</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="/browse">Browse Ideas</a>
                </div>
            </div>
        </div>
		
        <!-- Populate the DIV Section -->
        <div class="col-md-12" id="category_sort">       
        <?php if(isset($data)) {$this->load->view('partials/landing_category_div'); }?>
        </div>

	</div><!-- /.container --> 
  </body>
</html>