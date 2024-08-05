<div class="container type-of-facilitites-offices">
    <h1>Type Of Facilities</h1>
    <div class="row">
        <div class="col-md-4 space">
            <img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/goldeneyes/offices1.png" alt="">
            <h6>Private Offices</h6>
        </div>
        <div class="col-md-4 space">
            <img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/goldeneyes/offices2.jpg" alt="">
            <h6>Private Desk</h6>
        </div>
        <div class="col-md-4 space">
            <img src="<?php echo $_ENV['ROOT_PATH']; ?>/images/goldeneyes/11.jpg" alt="">
            <h6>Meeting Rooms</h6>
        </div>
    </div>
</div>

<style>
    .type-of-facilitites-offices {
        padding: 4em 0em;
    }

    .type-of-facilitites-offices .space {
        padding: 40px;
        text-align: center;
    }

    .type-of-facilitites-offices h1 {
        padding-left: 20px;
    }

    .type-of-facilitites-offices h6 {
        font-size: 32px;
        color: var(--white-color);
        justify-content: center;
        border-radius: 0px 0px 10px 10px;
        background-image: linear-gradient(to right, var(--gradient-color1), var(--gradient-color2));
    }

    .type-of-facilitites-offices p {
        text-align: center;
    }

    .type-of-facilitites-offices img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 10px 10px 0px 0px;
    }
</style>