<?php
// Array of FaqModel instances
$why_hire_us_array = [
    "300​+" => "Clients",
    "100​+" => "Pr​ojects",
    "3000+" => "Enquires",
    "4" => "Successful Years ​Completed",
];

?>

<section class="why-hire-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 left">
                <h1>WHY HIRE US ?</h1>
                <h3>Our team comprises highly ​skilled professionals with years ​of experience in the industry</h3>
                <a href="">Contact Now</a>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center right">
                <div class="container">
                    <div class="row mb-3 justify-content-center">
                        <?php foreach ($why_hire_us_array as $question => $answer): ?>

                            <div class="col-md-5 d-flex flex-column align-items-center">
                                <div class="p-3 item" style="background-color: var(--white-color);">
                                    <p style="color: var(--secondary-color);"><?php echo $question; ?></p>
                                    
                                </div>
                                <div>
                                    <p style="color: var(--white-color); margin-top: 5px;"><?php echo $answer; ?></p>
                                </div>
                                
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .why-hire-us {
        padding: 20px 40px;
        background-image: linear-gradient(to right, var(--gradient-color1), var(--gradient-color2));
    }

    .why-hire-us .left h3 {
        line-height: 1.2;
        padding-bottom: 20px;
    }

    .why-hire-us .left a {
        background-color: var(--white-color);
        padding: 10px 60px 10px 20px;
        font-size: 24px;
        font-weight: 900;
        color: var(--secondary-color);
    }

    .why-hire-us .item {
        width: 120px;
        text-align: center;
    }
</style>