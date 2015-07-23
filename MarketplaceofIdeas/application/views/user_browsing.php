<html>
	<head>
		<meta charset='utf-8'>
		<title>User Browser</title>
		<style type="text/css">

		.menu{
			width: 200px;
			display: inline-block;
			border: 1px solid silver;
		}

			.menu a{
				display: block;
			}

		.results{
			width: 900px;
			vertical-align: top;
			display: inline-block;
		}
			.results h3{
				width: 400px;
				display: inline-block;
			}

			.results a{
				margin-left: 25px;
			}

			.results b{
				margin-left: 25px;
			}

			.results label{
				margin-left: 20px;
			}

		.item{
			width: 200px;
			display: inline-block;
		}

		.pages{
			width: 1200px;
			margin-left: 25px;
			text-align: center;
		}

		.allitems{
			width: 900px;
			display: inline-block;
			vertical-align: top;
		}

		</style>

	</head>

	<body>
<<<<<<< Updated upstream
	<!-- <header>!LOAD PARTIAL/NAVBAR</header> -->
			<h3>Marketplace of Ideas</h3>
		<div class='menu'>
			<form action ='' method='post'>
				<input type='text' value='keyword'>
				<input type='hidden' value='search'>
				<input type='submit' value="Search">
				<h5>Categories</<h5>
				<a href="">Western</a>
				<a href="">Eastern</a>
				<a href="">Ancient Greek</a>
				<a href="">Modern</a>
				<a href="">Post-Modern</a>
			</form>
		</div>
		<div class='results'>
			<div class = 'allproucts'>
				<h3>Philosophies (page 1)</h3>
				<a href="">first</a>
				<a href="">prev</a>
				<b>2</b>
				<a href="">next</a>
				<label>Sort by</label>
				<select>
					<option>Price</option>
					<option>Most Popular</option>
					<option>Newest</option>
				</select>
			</div>

			<div class= 'allitems'>
				<div class = 'item'>
						<img src="http://0.tqn.com/d/ancienthistory/1/0/h/P/Socrates.jpg" width="200" height="200" >
				</div>
				<div class = 'item'>
						<img src="http://www.universaltheosophy.com/wp-content/gallery/biography-pictures/500-pythagoras_240x360.png" width="200" height="200">
				</div>
				<div class = 'item'>
						<a href="/ideas/show"><img style="-webkit-user-select: none;" src="http://www.toptenz.net/wp-content/uploads/2014/10/americanphilosophers4-640x480.jpg" width="200" height="200"></a>	
				</div>
				<div class = 'item'>
						<img src="http://www.philosophers.co.uk/immanuel-kant.jpg" width="200" height="200">
				</div>
				<div class = 'item'>
						<img src="http://0.tqn.com/d/ancienthistory/1/0/h/P/Socrates.jpg" width="200" height="200" >
				</div>
				<div class = 'item'>
						<img src="http://www.universaltheosophy.com/wp-content/gallery/biography-pictures/500-pythagoras_240x360.png" width="200" height="200">
				</div>
				<div class = 'item'>
						<img style="-webkit-user-select: none;" src="http://www.toptenz.net/wp-content/uploads/2014/10/americanphilosophers4-640x480.jpg" width="200" height="200">	
				</div>
				<div class = 'item'>
						<img src="http://www.philosophers.co.uk/immanuel-kant.jpg" width="200" height="200">
				</div>
				<div class = 'item'>
						<img src="http://0.tqn.com/d/ancienthistory/1/0/h/P/Socrates.jpg" width="200" height="200" >
				</div>
				<div class = 'item'>
						<img src="http://www.universaltheosophy.com/wp-content/gallery/biography-pictures/500-pythagoras_240x360.png" width="200" height="200">
				</div>
				<div class = 'item'>
						<img style="-webkit-user-select: none;" src="http://www.toptenz.net/wp-content/uploads/2014/10/americanphilosophers4-640x480.jpg" width="200" height="200">	
				</div>
				<div class = 'item'>
						<img src="http://www.philosophers.co.uk/immanuel-kant.jpg" width="200" height="200">
				</div>
				<div class = 'item'>
						<img src="http://0.tqn.com/d/ancienthistory/1/0/h/P/Socrates.jpg" width="200" height="200" >
				</div>
				<div class = 'item'>
						<img src="http://www.universaltheosophy.com/wp-content/gallery/biography-pictures/500-pythagoras_240x360.png" width="200" height="200">
				</div>
				<div class = 'item'>
						<img style="-webkit-user-select: none;" src="http://www.toptenz.net/wp-content/uploads/2014/10/americanphilosophers4-640x480.jpg" width="200" height="200">	
				</div>
				<div class = 'item'>
						<img src="http://www.philosophers.co.uk/immanuel-kant.jpg" width="200" height="200">
				</div>
			</div>
		</div>

		<div class='pages'>
			<p><a href=""><<</a>  |  <a href="">1</a>  |  2  |  <a href="">3</a>  |  <a href="">4</a>  |  <a href="">5</a> | <a href="">>> </a></p>
		</div>
=======
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
                    <li class="active"><a href="/browse">Browse Ideas</a></li></ol>
                <div>
                	<p><form class='pull-right' action='/ideas/cart' value='select'>
				    	<select>
				    		<option>Author</option>
				    		<option>Subject</option>
				    		<option>Era</option>
				    		<option>Locale</option>
				    	</select>
						<select>
				    		<option></option>
				    		<option>Author</option>
				    		<option>Subject</option>
				    		<option>Era</option>
				    		<option>Locale</option>
				    	</select>
				    	<input type='hidden' value='add'>
				    	<input type='submit' value='Sort Ideas'>
			    	</form></p>
			    	<p><form id="keyword_search_form" action ='' method='post'>
						<input type='text' placeholder='Search'>
						<input type='hidden' value='search'>
						<input type='submit' value="Search">
					</form></p>
				</div>
                
            </div>
        </div>
        <!-- /.row -->
		<div class='row'>
		</div>
        <!-- Projects Row -->
        <div class="row">
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
>>>>>>> Stashed changes

		

	</body>
</html>