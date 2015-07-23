<<<<<<< Updated upstream
<html>
	<head>
		<meta chartset='utf-8'>
		<title>User Show Details</title>
		<style type="text/css">

		*{
			outline: 1px dotted red;
		}

		.images{
			width: 250px;
			display: inline-block;
		}

		.smallimage{
			margin-top: 5px;
			display: inline-block;
		}

		.description{
			margin-left: 25px;
			width: 700px;
			vertical-align: top;
			display: inline-block;
		}

			.description form{
				margin-left: 450px;
			}

		.suggestions{
			margin: 20 30px;
			display: inline-block;
		}

			.suggestions p{
				width: 150px;
				text-align: center;
				display: inline-block;

			}


		</style>
	</head>
	<body>
		<h4>Partial goes here</h4>
		<a href="/">Go Back</a>

		<h2>Philosophies of C. West</h2>

		<div class='images'>
			<img style="-webkit-user-select: none;" src="http://www.toptenz.net/wp-content/uploads/2014/10/americanphilosophers4-640x480.jpg" width="250" height="250">	
			<div class='smallimage'>
				<img style="-webkit-user-select: none;" src="http://www.toptenz.net/wp-content/uploads/2014/10/americanphilosophers4-640x480.jpg" width="40" height="40">	
				<img style="-webkit-user-select: none;" src="http://www.toptenz.net/wp-content/uploads/2014/10/americanphilosophers4-640x480.jpg" width="40" height="40">	
				<img style="-webkit-user-select: none;" src="http://www.toptenz.net/wp-content/uploads/2014/10/americanphilosophers4-640x480.jpg" width="40" height="40">	
				<img style="-webkit-user-select: none;" src="http://www.toptenz.net/wp-content/uploads/2014/10/americanphilosophers4-640x480.jpg" width="40" height="40">	
				<img style="-webkit-user-select: none;" src="http://www.toptenz.net/wp-content/uploads/2014/10/americanphilosophers4-640x480.jpg" width="40" height="40">	
			</div>
		</div>

		<div class='description'>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
			 et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
			  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
			  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
			  mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
			  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
			  laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
			   esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
			    qui officia deserunt mollit anim id est laborum.</p>

			    <form action='/users_orders/cart' method='post'>
			    	<select name='quantity'>
			    		<option value='19.95'>1</option>
			    		<option value='37.95'>2</option>
			    		<option value='55.95'>3</option>
			    		<option value='73.95'>4</option>
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// echo "<pre>";
// var_dump($related);
// die();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?= $datum['name'] ?></title>
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
                <h1 class="page-header"><?= $datum['name'] ?>
                    <small><!-- Echo Subject HERE --></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="/browse">Browse Ideas</a>
                    </li>
                    <li class="active"><?= $datum['name'] ?></li>
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
                            <img min-height="500" class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                        <div class="item">
                            <img min-height="500" class="img-responsive" src="http://placehold.it/750x500" alt="">
                        </div>
                        <div class="item">
                            <img min-height="500" class="img-responsive" src="http://placehold.it/750x500" alt="">
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
                <h3>Description</h3>
                <p><?= $datum['description'] ?></p>
                <form action='/ideas/cart' value='select'>
			    	<select>
			    		<option>1($19.95)</option>
			    		<option>2($37.95)</option>
			    		<option>3($55.95)</option>
			    		<option>4($73.95)</option>
>>>>>>> Stashed changes
			    	</select>
			    	<input type='hidden' name='add'>
			    	<input type='submit' value='Add to Cart'>
			    </form>
<<<<<<< Updated upstream

			</div>

		<div class='suggestions'>
			<h3>Similar items</h3>
			<img src="http://www.philosophers.co.uk/immanuel-kant.jpg" width="150" height="150">
			<img src="http://0.tqn.com/d/ancienthistory/1/0/h/P/Socrates.jpg" width="150" height="150" >
			<img src="http://www.universaltheosophy.com/wp-content/gallery/biography-pictures/500-pythagoras_240x360.png" width="150" height="150">	
			<br>
			<p>Kant</p><p>Socrates</p><p>Pythagoras</p>
		</div>


=======
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Ideas Row -->
        <div class="row">
            <?php if(isset($related)) { ?>
            <div class="col-lg-12">
                <h3 class="page-header">Related Ideas</h3>
            </div>
			<?php $count = 0;
			for($i = 0; $i < count($related) && $i < 4; $i++) {
				$number = rand(0, count($related))?>
            <div class="col-sm-3 col-xs-6">
                <a href="/ideas/show/<?= $related[$number]['id'] ?>">
                    <img class="img-responsive img-hover img-related" src="<?= base_url();?>/assets/img/diogenes.jpg" alt="Diogenes">
                </a>
                <a href="/ideas/show/<?= $related[$number]['id'] ?>" class="btn btn-default center-block"><?= $related[$number]['name'] ?></a>
            </div>
            <?php } } ?>
        </div>
        <!-- /.row -->
>>>>>>> Stashed changes
	</body>
</html>