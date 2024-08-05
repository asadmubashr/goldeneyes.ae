<div class="flexible-workspaces-co-working">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center center">
                <div>
                    <p class="desc2"><span class="bold">Flexible Workspaces:</span> Whether you need a private office, a
                        dedicated desk, or a hot desk, our co-working spaces are tailored to suit your specific needs.
                        We offer spaces ranging from 80 to 400 sq ft, allowing you to choose the perfect size for your
                        business requirements.</p>
                    <p class="desc2"><span class="bold">Exceptional Amenities:</span> Our state-of-the-art facilities
                        include high-speed internet, fully equipped meeting rooms, and a comfortable lounge area. Enjoy
                        complimentary beverages, printing services, and round-the-clock access to ensure you can work
                        seamlessly at any time.</p>
                    <p class="desc2"><span class="bold">Collaborative Environment:</span> Golden Eye Business Centre
                        fosters a community-centric atmosphere where like-minded professionals can network, collaborate,
                        and grow together. Attend our regular networking events, workshops, and seminars to enhance your
                        business skills and expand your connections.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-container">
                    <img src="<?php echo $_ENV['ROOT_PATH'] ?>/images/goldeneyes/coworking2.png" alt="Image 1" class="img-1">
                    <img src="<?php echo $_ENV['ROOT_PATH'] ?>/images/goldeneyes/coworking3.png" alt="Image 2" class="img-2">
                    <img src="<?php echo $_ENV['ROOT_PATH'] ?>/images/goldeneyes/coworking4.png" alt="Image 3" class="img-3">
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .image-container {
        position: relative;
        width: 100%;
        height: 100%;
    }
    .image-container img {
        position: absolute;
        object-fit: cover;
    }
    .img-1 {
        top: 0;
        left: 0;
        width: 50%;
        height: 40%;
    }
    .img-2 {
        top: 25%;
        right: 0;
        width: 50%;
        height: 50%;
    }
    .img-3 {
        bottom: 0;
        left: 0;
        width: 50%;
        height: 40%;
    }

    @media (max-width: 768px) {
        .image-container {
            width: 100%;
            height: 500px;
        }
    }
</style>

<style>
    .flexible-workspaces-co-working {
        padding: 4em 0px;
        background-color: var(--background-color);
    }

    .flexible-workspaces-co-working .bold {
        color: var(--black-color);
        font-weight: bold;
        font-size: 22px;
    }

    .flexible-workspaces-co-working h2 {
        color: var(--black-color);
    }

    .flexible-workspaces-co-working .desc2 {
        color: var(--black-color);
    }
</style>
