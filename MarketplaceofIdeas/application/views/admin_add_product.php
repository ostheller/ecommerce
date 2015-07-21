<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrative Add Products</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type=""></style>
</head>
<header><--!LOAD PARTIAL/NAVBAR--></header>
<body>
	<h2>Add Product</h2>
	<form action='edit' method='post'>
		<label>Name:</label><input type='text' name='name'>
		<label>Description:</label><input type='text' name='descrip'>
		<label>Categories</label><select>
		<option>Authors</option>
		<option>Eras</option>
		<option>Subject</option>
		<option>Local</option>
		</select>
		<!-- when the admin hovers over the <option>s an edit and delete icon need to appear and function WHEN option edit is clicked the <option> is replaced with <input type='text'> -->
		<!-- when DELETE is clicked on display alert that confirms deletion of category -->
		<label>or add new category:</label><input type='text' name='addCat'>
		<!-- category selection field: should it update upon moving out of input field OR does the category just get added to the DB and generate on all appropriate pages after form submission??? -->
			<form action='imgUpload' method='post'>
				<label>Images</label>
				<input type='file' name='image'>
				<input type='submit' value='Upload'>
				<!-- the upload button is the browse button (ie to find the img file you want to upload) -->
			</form>
			<div>
				<form action='setImg' method='post'>
				<?//foreach($image)
				//<!--the idea is that the for each will populate each image with the appropriate thumbnail and the delete and main checkbox  -->
				//{?>
					<p>IMAGE<?//image thumbnail?><a href="">Delete</a><input type='checkbox' value='mainImg'>Main</p>
					<!-- make sure that only one box can be checked as main -->
					<!-- wire frame mentions that trash/delete and dragability is hidden until you hover on the image AND we need make the image dragable -->
				<?//}?>
				</form>
			</div>
		<button>Cancel</button>
		<!-- redirects to the admin product dash -->
		<button>Preview</button>
		<!-- preview button opens a new tab with the product page displaying appropriate info displayed -->
		<input type='submit' value='Update'>
	</form>
</body>
</html>