 <?php for($k = 0; $k < 3; $k ++) { ?>
        <!-- Projects Row -->
        <div class="row">
            <?php for($i = 0; $i<3; $i++) { ?>
            <div class="col-md-4 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html">Project Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->
        <?php } ?>