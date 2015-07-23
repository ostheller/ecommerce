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


<<<<<<< Updated upstream
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
=======
    <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">
                    The Marketplace of Ideas
                </h1>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-users"></i> Author</h4>
                    </div>
                    <div class="panel-body">
                        <div class="thumbnail">
                        <img alt="Raphael's School of Athens" src="<?= base_url();?>/assets/img/school_of_athens.jpg" />
                    </div>
                        <p>A philosopher, in a broad sense, is someone who studies philosophy. The word "philosopher" comes from the Ancient Greek φιλόσοφος (philosophos), which means "lover of wisdom". The introduction of the terms "philosopher" and "philosophy" has been ascribed to the Greek thinker Pythagoras.</p>
                        <a href="/category/author" class="btn btn-default">View Authors</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-book"></i> Subject</h4>
                    </div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <img alt="Old books" src="<?= base_url();?>/assets/img/subjects.jpg" />
                        </div>
                        <p>Philosophy is the study of general and fundamental problems, such as those connected with reality, existence, knowledge, values, reason, mind and language. There are five main branches: epistemology, ethics, aesthetics, metaphysics and politics.
                        </p>
                        <a href="/category/subject" class="btn btn-default">View Subjects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-bell"></i> Era</h4>
                    </div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <img alt="A 18th century French Enlightenment salon" src="<?= base_url();?>/assets/img/salon.jpg" />
                        </div>
                        <p>All cultures — be they prehistoric, medieval, or modern; Eastern, Western, religious or secular — have had their own unique schools of philosophy, arrived at through both inheritance and through independent discovery. </p>
                        <a href="/category/era" class="btn btn-default">View Eras</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-university"></i> Locale</h4>
                    </div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <img alt="The Parthenon in Athens" src="<?= base_url();?>/assets/img/parthenon.jpg" />
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a href="/category/location" class="btn btn-default">View Locations</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

         <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="/browse">Explore All Ideas!</a>
                </div>
            </div>
        </div>
		
        <!-- Populate the DIV Section -->
        <div class="col-md-12" id="category_sort">       
        <?php if(isset($data)) {$this->load->view('partials/landing_category_div'); }?>
        </div>
>>>>>>> Stashed changes

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