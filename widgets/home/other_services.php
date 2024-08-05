<div class="container other-services-home">
    <h1>Other Services</h1>
    <div class="row">
        <div class="col-sm-4 space">
            <img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/goldeneyes/9.jpg" alt="">
            <h6>Business Set-up</h6>
            <p>Setting up a business in Dubai offers a ​strategic advantage due to its thriving ​economy, strategic location, and ​business-friendly environment.</p>
        </div>
        <div class="col-sm-4 space">
            <img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/goldeneyes/10.jpg" alt="">
            <h6>PRO Services</h6>
            <p>Professional PRO services  are essential ​for businesses looking to navigate the ​intricate landscape of governmental ​regulations and procedures.</p>
        </div>
        <div class="col-sm-4 space">
            <img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/goldeneyes/11.jpg" alt="">
            <h6>Accounting & Bookkeeping</h6>
            <p>Stay financially organized and ​compliant with our expert accounting ​and bookkeeping services, ensuring ​accurate records.</p>
        </div>
    </div>
</div>

<style>
    .other-services-home {
        padding: 0em 0em;
    }

    .other-services-home .space {
        padding: 40px;
        text-align: center;
    }

    .other-services-home h6 {
        color: var(--secondary-color);
        padding-top: 10px;
    }

    .other-services-home p {
        text-align: center;
    }

    .other-services-home img {
        width: 100%;
        height: auto;
        
        border: double 10px transparent;
        border-radius: 10px;
        background-image: linear-gradient(white, white),
            linear-gradient(to right, var(--gradient-color1), var(--gradient-color2));
        background-origin: border-box;
        background-clip: content-box, border-box;
    }
</style>