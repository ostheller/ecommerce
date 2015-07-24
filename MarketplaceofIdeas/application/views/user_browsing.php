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
            #keyword_search_form {
                margin-bottom: 20px;
                margin-right: 20px;
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
                <div class="page-header">
                	<h1>Explore All Ideas</h1></div>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active"><a href="/browse">Browse Ideas</a></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		<div class='row'>
		</div>
        <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="well">
                    <form action='/ideas/sort' method="post">
                        <select name="sort">
                            <option></option>
                            <option value="byPrice">Price</option>
                            <option value="byPopularity">Popularity</option>
                        </select>
                        <input type='submit' value='Sort'>
                    </form>
                </div>
                <div class="well">
                    <form id="keyword_search_form" action ='/search' method='post' role="search">
                        <input type='text' name='keyword' placeholder='Search' size='16'>
                        <input type="submit" value="Search">
                    </form>
            </div>
        </div>
        <!-- Projects Row -->
        <div class="row col-md-9">
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