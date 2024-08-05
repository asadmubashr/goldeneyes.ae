<?php

class SetupBusinessModel
{
    public $title1;
    public $title2;
    public $description;
    public $learnMoreImage;
    public $mainImage;

    public $redirect;

    public function __construct($title1, $title2, $description, $learnMoreImage, $mainImage, $redirect)
    {
        $this->title1 = $title1;
        $this->title2 = $title2;
        $this->description = $description;
        $this->learnMoreImage = $learnMoreImage;
        $this->mainImage = $mainImage;
        $this->redirect = $redirect;
    }
}

$setupBusinesses = [
    new SetupBusinessModel(
        title1: 'Company setup in',
        title2: 'FREEZONE',
        description: "UAE Freezones are vibrant hubs of ​economic activity, offering entrepreneurs ​and businesses unparalleled opportunities ​for growth and success. With over 40 ​Freezones strategically located across the ​Emirates.",
        learnMoreImage: "images/goldeneyes/Read More Design.png",
        mainImage: "images/goldeneyes/Freezone.png",
        redirect: "https://shamilservices.ae/freezone_companies/dubai-freezone-company-overview.php"
        
    ),
    new SetupBusinessModel(
        title1: 'Company setup in',
        title2: 'MAINLAND',
        description: "UAE Mainland presents a dynamic ​landscape for entrepreneurs and ​businesses seeking to establish a strong ​presence in the region's thriving ​economy.",
        learnMoreImage: "images/goldeneyes/Read More Design.png",
        mainImage: "images/goldeneyes/Mainland.png",
        redirect: "https://shamilservices.ae/mainland_companies/mainland-company-formation-in-dubai.php"
    ),
    new SetupBusinessModel(
        title1: 'Company setup in',
        title2: 'OFFSHORE',
        description: "UAE Offshore company formation offers a ​strategic solution for international ​entrepreneurs and businesses seeking to ​establish a presence in the region while ​enjoying a range of tax advantages and ​asset protection benefits.",
        learnMoreImage: "images/goldeneyes/Read More Design.png",
        mainImage: "images/goldeneyes/Offshore.png",
        redirect: "https://shamilservices.ae/offshore.php"
    ),
];
?>

<section class="ftco-setupbusiness">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center mb-5">
                <h3 class="heading">Set up a Business</h3>
            </div>
        </div>

        <div class="row">
            <?php foreach ($setupBusinesses as $business): ?>
                <div class="col-md-4 d-flex align-items-stretch">
                    <div class="card border-0">
                        <img class="card-img-top" src="<?php echo $_ENV['ROOT_PATH'] . '/' . $business->mainImage; ?>"
                            alt="Main Image">
                        <div class="card-body">
                            <h6 class="">
                                <?php echo $business->title1; ?>
                            </h6>
                            <h3 class="card-title" style="color: var(--primary-color)">
                                <?php echo $business->title2; ?>
                            </h3>
                            <p class="card-text">
                                <?php echo $business->description; ?>
                            </p>
                            <a href="<?php echo $business->redirect; ?>" style="color: var(--primary-color)">Learn More -></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<style>
    .ftco-setupbusiness {
        padding: 2em 1em;
    }

    .ftco-setupbusiness .heading {
        text-align: center;
    }

    .ftco-setupbusiness h6 {
        text-align: start;
    }

    .ftco-setupbusiness .card {
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .ftco-setupbusiness .card:hover {
        transform: translateY(-30px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 767px) {
        .ftco-setupbusiness {
            padding: 2em 0em;
        }

    }
</style>