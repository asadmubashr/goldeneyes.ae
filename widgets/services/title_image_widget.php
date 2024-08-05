<section class="title-image position-relative d-flex align-items-center" style="background-image: url('<?php echo $_ENV['ROOT_PATH'];; ?>/images/<?php echo $image; ?>'); background-position: center; ">

    <!-- Overlay for Background Image -->
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>    

    <div class="container" style="position: relative; z-index: 2; text-align: center;">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9 ftco-animate">
                <h1 class="mb-3 bread" style="color: #fff;"><?php echo $lang[$title]; ?></h1>
                <p class="breadcrumbs">
                    <span class="mr-2" ><a href="<?php echo $_ENV['ROOT_PATH']; ?>/index.php" style="color: #fff;"> <?php echo $lang['home']; ?></a></span>
                    <span> / <?php echo $lang[$title]; ?></span>
                </p>
            </div>
        </div>
    </div>
</section>
