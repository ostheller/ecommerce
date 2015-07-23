<html>
	<head>
		<meta charset='utf-8'>
		<title>Welcome User</title>

		<style type="text/css">

		.wrapper{
			width: 1100px;
		}

		.welcome{
			width: 900px;
			height: 200px;
			border: 1px solid black;
			background-color: green;
			color: white;
			text-align: center;
			display: inline-block;
			margin-left: 100px;
		}

		.feature{
			margin-left: 150px;
			width:900px;
			margin-left: 50px;
			text-align: center;
		}

		.current{
			margin-left: 100px;
		}


		.latestideas{
			width: 225px;
			display: inline-block;
			text-align: center;
		}

		h3{
			text-align: center;
		}
		</style>

		<script type="text/javascript">
			var slideimages = new Array() 
			slideimages[0] = new Image() 
			slideimages[0].src = "authors.gif" 
			slideimages[1] = new Image()
			slideimages[1].src = "eras.gif"
			slideimages[2] = new Image()
			slideimages[2].src = "locales.gif"
			slideimages[3] = new Image()
			slideimages[3].src = "subjects.gif"
		</script>

	</head>
	<body>
		<div class='wrapper'>

			<div class='welcome'>
				<h2>Marketplace of Ideas</h2>
				</div>
			<div class='current'>
				<h3>Categories</h3>
				<div class = 'latestideas'>
					<a href='browse'><img src="http://0.tqn.com/d/ancienthistory/1/0/h/P/Socrates.jpg" width="200" height="200"></a>
					<p>Authors on Philosophy</p>
				</div>
				<div class = 'latestideas'>
					<a href='browse'><img src="http://www.universaltheosophy.com/wp-content/gallery/biography-pictures/500-pythagoras_240x360.png" width="200" height="200"></a>
					<p>Philosophies by eras</p>
				</div>
				<div class = 'latestideas'>
					<a href='browse'><img style="-webkit-user-select: none;" src="http://www.toptenz.net/wp-content/uploads/2014/10/americanphilosophers4-640x480.jpg" width="200" height="200"></a>
					<p>Philosophies by locale</p>
				</div>
				<div class = 'latestideas'>
					<a href='browse'><img src="http://www.philosophers.co.uk/immanuel-kant.jpg" width="200" height="200"></a>
					<p>Philosophies by Subject</p>
				</div>
			</div>

			<div class='feature'>
				<h3>Featured Idea</h3>
				<img style="-webkit-user-select: none; cursor: zoom-out;" src="http://tomgpalmer.com/wp-content/uploads/legacy-images/School%20of%20Athens2.jpg" width="310" height="200">
				<p><strong>Name:</strong> Plato: His ideas were so crate!</p>
				<p><strong>Author: </strong>Chuck Barris</p>
				<p><strong>Price:</strong> $19.95</p>
			</div>
		</div>
	</body>
</html>