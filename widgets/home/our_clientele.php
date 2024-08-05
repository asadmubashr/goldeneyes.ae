<?php
$clients = [
    'images/clients/1.jpeg',
    'images/clients/2.jpeg',
    'images/clients/3.jpeg',
    'images/clients/4.jpeg'
];
?>
<section class="ftco-testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-10 ftco-animate text-center">
                <h3><?php echo $lang['our_clientele']; ?></h3>
                <p><?php echo $lang['our_clientele_desc']; ?></p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="owl-carousel">
                    <?php
                    foreach ($clients as $client) {
                        ?>
                        <img src="<?php echo $client ?>" class="d-block mx-auto" alt="Image 1">
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function() {
    var owl = $('.owl-carousel').eq(0); // Select the first matched element
    console.log("Owl length:", owl.length);
    owl.owlCarousel({
        items: 6, // Default number of items to display
        loop: true,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive: {
            0: {
                items: 1 // Adjust number of items for smaller screens (up to 767px)
            },
            768: {
                items: 2 // Adjust number of items for medium screens (768px and above)
            },
            992: {
                items: 6 // Default number of items for larger screens (992px and above)
            }
        }
    });
});


</script>