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
			    	</select>
			    	<input type='hidden' name='add'>
			    	<input type='submit' value='Add to Cart'>
			    </form>

			</div>

		<div class='suggestions'>
			<h3>Similar items</h3>
			<img src="http://www.philosophers.co.uk/immanuel-kant.jpg" width="150" height="150">
			<img src="http://0.tqn.com/d/ancienthistory/1/0/h/P/Socrates.jpg" width="150" height="150" >
			<img src="http://www.universaltheosophy.com/wp-content/gallery/biography-pictures/500-pythagoras_240x360.png" width="150" height="150">	
			<br>
			<p>Kant</p><p>Socrates</p><p>Pythagoras</p>
		</div>


	</body>
</html>