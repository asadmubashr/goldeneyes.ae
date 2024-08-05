<?php
// Array of FaqModel instances
$why_hire_us_array = [
    "80 Sq Ft." => "images/goldeneyes/office-sizes/1.png",
    "100 Sq Ft." => "images/goldeneyes/office-sizes/2.png",
    "150 Sq Ft." => "images/goldeneyes/office-sizes/3.png",
    "200 Sq Ft." => "images/goldeneyes/office-sizes/4.png",
    "250 Sq Ft." => "images/goldeneyes/office-sizes/5.png",
    "300 Sq Ft." => "images/goldeneyes/office-sizes/6.png",
    "350 Sq Ft." => "images/goldeneyes/office-sizes/7.png",
    "400 Sq Ft." => "images/goldeneyes/office-sizes/8.png",
    "450 Sq Ft." => "images/goldeneyes/office-sizes/9.png",
    "500 Sq Ft." => "images/goldeneyes/office-sizes/10.png",
];

?>

<section class="office-sizes-available-home">
    <!-- <div class="container" style="background-color: var(--background-color); background-clip: padding-box;">
        <h1>Office Sizes Avilable</h1>
    </div> -->

    <div class="container">
    <h1>Office Sizes Avilable</h1>
        <div class="row body">
            <?php foreach ($why_hire_us_array as $question => $answer): ?>
                <div class="col-md-2 d-flex flex-column align-items-center item">
                    <div><img src="<?php echo $_ENV['ROOT_PATH']; ?>/<?php echo $answer; ?>" alt=""></div>
                    <div>
                        <p><?php echo $question; ?></p>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    .office-sizes-available-home {
        margin: 0em 0em;
    }

    .office-sizes-available-home h3 {
        color: var(--secondary-color);
        font-weight: 900;
    }

    .office-sizes-available-home .body {
        padding: 4em 0em;
    }

    .office-sizes-available-home .item {
        margin: 20px;
        padding: 20px 10px 0px 10px;

    }

    .office-sizes-available-home .item img {
        border-radius: 50%;
    }

    .office-sizes-available-home .item p {
        margin-top: 10px;
        color: var(--primary-color);
        font-size: 22px;
        font-weight: 900;
    }

    .office-sizes-available-home img {
        width: 200px;
    }
</style>