<?php $count=0; 
	foreach($data as $datum) { ?>
    <div class="col-md-4 img-portfolio">
        <a href="/browse/<?= $datum['name'] ?>">
            <img class="img-responsive img-hover" src="<?= base_url();?>/assets/img/socrates.png" alt="<?= $datum['alt_text'] ?>">
        </a>
        <h4 class='text-center' >
            <a href="/browse/<?= $datum['name'] ?>"><?= $datum['name'] ?></a>
        </h4>
        <p></p>
    </div>
 <?php $count+=1;} ?>