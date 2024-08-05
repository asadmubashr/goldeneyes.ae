<?php
// Array of FaqModel instances
$why_hire_us_array = [
    "AC MAINTENANCE" => "images/header/ac_maintenance.png",
    "RENOVATION" => "images/header/renovation.png",
    "CARPENTRY" => "images/header/carpentry.png",
    "OFFICE SET-UP" => "images/header/office_setup.png",
    "ELECTRICAL" => "images/header/electrical.png",
    "PLUMBING" => "images/header/plumbing.png",
    "HANDMYMAN" => "images/header/hand_myman.png",
    "PAINTING" => "images/header/painting.png",
];

?>

<section class="specialized-technical-services">
    <div class="container">
        <div class="row justify-content-center">
            <h3>Specialized Technical Solutions</h3>
        </div>
        <hr>

        <div class="row body">
            <?php foreach ($why_hire_us_array as $question => $answer): ?>
            <div class="col d-flex flex-column align-items-center item">
                <div><img src="<?php echo $answer; ?>" alt=""></div>
                <div>
                    <p><?php echo $question; ?></p>
                </div>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
.specialized-technical-services {
    margin: 4em 0em;
}

.specialized-technical-services h3 {
    color: var(--secondary-color);
    font-weight: 900;
}

.specialized-technical-services hr {
    display: block;
    height: 5px;
    width: 800px;
    /* Adjust height as needed */
    border: none;
    background: linear-gradient(to right, var(--gradient-color1), var(--gradient-color2));
}

.specialized-technical-services .body {
    margin: 4em 0em;
}

.specialized-technical-services .item {
    margin: 20px;
    padding: 20px 10px 0px 10px;
    background-color: var(--gray-color);
    border-radius: 20px;
}

.specialized-technical-services .item img {
    border-radius: 20px;
}

.specialized-technical-services .item p {
    margin-top: 10px;
    color: var(--secondary-color);
    font-size: 22px;
    font-weight: 900;
}

.specialized-technical-services img {
    width: 200px;
}
</style>