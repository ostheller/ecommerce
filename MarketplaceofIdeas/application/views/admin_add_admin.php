<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administrative Add New Admins</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type=""></style>
</head>
<header><--!LOAD PARTIAL/NAVBAR--></header>
<body>
	<h2>Add Admin</h2>
	<form method="post" action="<?php FILL THIS IN ?>">			
		<p>Email: <input type="text" name="email"></p>
		<p>Password: <input type="password" name="password"></p>
		<p>Confirm Password: <input type="password" name="confirm_password"></p>
		<select name="user_level">
			<option value="5">Admin</option>
			<option value="9">Superadmin</option>
		</select>
		<input type="submit" value="Create">
	</form>
</body>
</html>