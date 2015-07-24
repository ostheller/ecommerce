<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Edit Product</title>
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
		</style>
	</head>
	<body>
<header><!-- Navigation -->
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
            <a class="navbar-brand" href="/admin">The Marketplace of Ideas</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="/admin/orders">Orders</a>
						</li>
						<li>
							<a href="/admin/products">Products</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/logout">Log Off</a>
						</li>
				</div>
			</nav></header>
<div class="container">
	<div class="row col-sm-12 col-offset-sm-3">
		<div class="col-offset-sm-3">
	<h2 class="text-center">Edit Product - ID #<?= $data['id']?></h2>
	<form action='edit' method='post'>
		<div class='row'>
			<label>Name:</label>
			<input type='text' name='name' placeholder="<?= $data['name']?>">
		</div>
		<div class='row'>
			<label>Description:</label>
			<textarea name='descrip' placeholder="<?= $data['description']?>" rows="5" cols="100"></textarea>
		</div>
		<div class='row'>
			<label>Categories</label>
			<select>
				<?//foreach($categories as $category)
				//{?>
					<option>CATEGORY</option>
			</select>
		</div>
		<div class='row'>
			<label>Tag</label>
			<select>
				<?//foreach($tags as $tag)
				//{?>
					<option>TAG</option>
				<?//}?>
			</select>
		</div>
	</form>
<!-- when the admin hovers over the <option>s an edit and delete icon need to appear and function WHEN option edit is clicked the <option> is replaced with <input type='text'> -->
<!-- when DELETE is clicked on display alert that confirms deletion of category -->
		<form action='addTag' method='post'>
			<label>or add new tag:</label><input type='text' name='addTag'>
<!-- tog selection field: should it update upon moving out of input field OR does the tag just get added to the DB -->
			<label>which category does this tag belong to?</label>
			<select>
				<?//foreach($categories as $category)
				//{?>
					<option>CATEGORY</option>
				<?//}?>
			</select>
			<input type='submit' value='Add New Tag'>
		</form><!--end of addTag form-->
		<div id='assocTags'>
<!-- populate with all the tags associated with the product AJAX to add any new tags without full refresh  -->
		</div>
		<img src="<?= base_url();?>/assets/img/placeholder.png">
		<form action='imgUpload' method='post' enctype='multipart/form-data' >
			<label>Images</label>
			<input type='file' name='imageToUpload'>
			<input type='submit' value='upload'>
<!-- the upload button is the browse button (ie to find the img file you want to upload) -->
		</form><!-- end of imgUpload form-->
		<div>
			<form action='setImg' method='post' enctype='multipart/form-data'>
				<?//foreach($image)
				//<!--the idea is that the for each will populate each image with the appropriate thumbnail and the delete and main checkbox  -->
				//{?>
					<p>IMAGE<?//image thumbnail?><a href="">Delete</a><input type='checkbox' value='mainImg'>Main</p>
					<!-- make sure that only one box can be checked as main -->
					<!-- wire frame mentions that trash/delete and dragability is hidden until you hover on the image AND we need make the image dragable -->
				<?//}?>
			</form><!-- end of setImg form-->
			</div>
		<button>Cancel</button>
		<!-- redirects to the admin product dash -->
		<button>Preview</button>
		<!-- preview button opens a new tab with the product page displaying appropriate info displayed -->
		<input type='submit' value='Update'>
	</form><!--end of edit form-->
</div>
</div>
</body>
</html>