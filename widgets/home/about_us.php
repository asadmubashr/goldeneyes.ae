<div class="about-us-home">
    <div class="container">
        <div class="row">
            <div class="col-md-7 d-flex justify-content-center align-items-center center">
                <div>
                    <h2><?php echo strtoupper('About Us'); ?></h2>
                    <p class="desc1">Golden Eye Business Centre is a premier co-working space ​located in the heart of Dubai, dedicated to providing ​entrepreneurs, freelancers, and businesses with a dynamic and ​innovative environment to thrive. Our state-of-the-art facilities ​and professional services are designed to foster creativity, ​collaboration, and growth.</p>
                    <h6>Our Mission</h6>
                    <p class="desc2">At Golden Eye Business Centre, our mission is to create a vibrant business community where ​individuals and companies can connect, collaborate, and grow. We aim to provide an inspiring and ​flexible workspace that caters to the diverse needs of modern businesses.</p>
                    <h6>Our Commitment</h6>
                    <p class="desc2">We are committed to providing a seamless and enjoyable co-working experience, ensuring that our ​members have everything they need to succeed. Whether you are a startup, a freelancer, or an ​established business, Golden Eye Business Centre is the perfect place to start and grow your ​business.</p>
                </div>



            </div>
            <div class="col-md-5">
                <img src="<?php echo $_ENV['ROOT_PATH'] ?>/images/goldeneyes/2.jpg" alt=""
                    style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</div>

<style>
    .about-us-home {
        padding: 4em 0px;
        background-color: var(--background-color);
    }

    .about-us-home .center {}

    .about-us-home h2 {
        color: var(--black-color);
    }

    .about-us-home .desc1 {
        font-size: 20.8px;
        font-weight: 600;
        color: #737373;
    }

    .about-us-home .desc2 {
        color: var(--black-color);
    }
</style>