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
            <a class="navbar-brand" href="/">The Marketplace of Ideas: Administration</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Orders</a>
						</li>
						<li>
							<a href="#">Products</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/logout">Log Off</a>
						</li>
				</div>
			</nav></header>
<body>
	<h2>Edit Product - ID <??></h2>
	<form action='edit' method='post'>
		<label>Name:</label><input type='text' name='name'>
		<label>Description:</label><input type='text' name='descrip'>
		<label>Categories</label>
			<select>
			<?//foreach($categories as $category)
			//{?>
				<option><?=//$category?></option>
			<?//}?>
		</select>
		<label>Tag</label>
		<select>
			<?//foreach($tags as $tag)
			//{?>
				<option><?=//$tag?></option>
			<?//}?>
		</select>
<!-- when the admin hovers over the <option>s an edit and delete icon need to appear and function WHEN option edit is clicked the <option> is replaced with <input type='text'> -->
<!-- when DELETE is clicked on display alert that confirms deletion of category -->
		<form action='addTag' method='post'>
			<label>or add new tag:</label><input type='text' name='addTag'>
<!-- tog selection field: should it update upon moving out of input field OR does the tag just get added to the DB -->
			<label>which category does this tag belong to?</label>
			<select>
				<?//foreach($categories as $category)
				//{?>
					<option><?=//$category?></option>
				<?//}?>
			</select>
			<input type='submit' value='Add New Tag'>
		</form><!--end of addTag form-->
		<div id='assocTags'>
<!-- populate with all the tags associated with the product AJAX to add any new tags without full refresh  -->
		</div>
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
</body>
</html>