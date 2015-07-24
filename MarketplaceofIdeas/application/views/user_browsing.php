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
        <script src="<?= base_url();?>/assets/js/browse.js"></script>
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
            <div class="col-sm-3">
                <div class="well">
                    <form id="keyword_search_form" action ='/search' method='post'>
                        <input type='text' name='keyword' placeholder='Search' size='17'>
                        <input type="submit" value="Search">
                    </form>
                    <hr>
                    <h4>Sort All Ideas</h4>
                     <div class="list-group">
                        <a id="byPrice" class="list-group-item">Price</a>
                        <a id="byPopularity" class="list-group-item">Popularity</a>
                    </div>
                    <hr>
                    <h4>Browse by Subject</h4>
                     <div class="list-group">
                        <a id="aesthetics" class="list-group-item">Aesthetics</a>
                        <a id="epistemology" class="list-group-item">Epistemology</a>
                        <a id="ethics" class="list-group-item">Ethics</a>
                        <a id="metaphysics" class="list-group-item">Metaphysics</a>
                        <a id="political" class="list-group-item">Political &amp; Social</a>
                    </div>
                </div>
        </div>
        <!-- Projects Row -->
        <div class="row col-sm-9" id="content">
        <?php
            $this->load->view('partials/browse_content');
            ?>
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