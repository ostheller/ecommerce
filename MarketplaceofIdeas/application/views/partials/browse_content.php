<?php foreach($data as $datum) { ?>
            <div class="col-md-4">
                <a href="/ideas/show/<?= $datum['id'] ?>">
                    <img class="img-responsive img-hover" src="<?= base_url();?>/assets/img/socrates.png" alt="">
                </a>
                <h3 class='text-center'>
                    <a href="/ideas/show/<?= $datum['id'] ?>"><?= $datum['name'] ?></a>
                </h3>
            </div>
<?php } ?>