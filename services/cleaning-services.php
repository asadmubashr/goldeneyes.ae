<?php 
$title = "Home";
include "../includes/header_head.php";
include "../includes/header.php";
?>

<div class="section-container">
    <?php 
    $image = "contactus.jpg";
    $title = 'cleaning_services';
    include "../widgets/services/title_image_widget.php"
    ?>
</div>

<div class="section-container">
    <?php 
    $image = "cleaning_services.png";
    $title = 'Cleaning Services';
    $description = "Najma Al Shamil Technical Services, established in 2020 in Dubai, offers comprehensive cleaning services. Our dedicated team delivers exceptional cleaning solutions for residential, commercial, and industrial properties. With our attention to detail and use of advanced equipment, we ensure a spotless and hygienic environment. Trust us for all your cleaning needs in Dubai and enjoy a pristine space that exceeds your expectations.";
    include "../widgets/services/image_text_widget.php"
    ?>
</div>

<?php include "../includes/footer.php" ?>