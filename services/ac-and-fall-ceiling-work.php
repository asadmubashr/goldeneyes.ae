<?php 
$title = "Home";
include "../includes/header_head.php";
include "../includes/header.php";
?>

<div class="section-container">
    <?php 
    $image = "contactus.jpg";
    $title = 'ac_fall_ceiling_work';
    include "../widgets/services/title_image_widget.php"
    ?>
</div>

<div class="section-container">
    <?php 
    $image = "ac_fall_ceiling_work.png";
    $title = 'AC and Fall Ceiling Work';
    $description = "Najma Al Shamil Technical Services, established in 2020 in Dubai, is your go-to provider for AC and false ceiling work. Our experienced team delivers top-notch installation, maintenance, and repair services, ensuring efficient cooling systems and aesthetically pleasing false ceilings for residential, commercial, and industrial spaces. Trust us for all your AC and false ceiling needs in Dubai.";
    include "../widgets/services/image_text_widget.php"
    ?>
</div>

<?php include "../includes/footer.php" ?>