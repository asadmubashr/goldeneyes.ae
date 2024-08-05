<?php 
$title = "Home";
include "../includes/header_head.php";
include "../includes/header.php";
?>

<div class="section-container">
    <?php 
    $image = "contactus.jpg";
    $title = 'carpentry_wood_flooring_work';
    include "../widgets/services/title_image_widget.php"
    ?>
</div>

<div class="section-container">
    <?php 
    $image = "carpenter_work.png";
    $title = 'Carpentry and Wood Flooring work';
    $description = "Najma Al Shamil Technical Services, established in 2020 in Dubai, specializes in top-notch carpentry and wood flooring work. Our skilled team delivers exceptional craftsmanship and precision in installations, repairs, and renovations. Whether it's custom carpentry or elegant wood flooring, we ensure your space exudes sophistication and functionality. Trust us for all your carpentry and wood flooring needs, as we strive to provide exclusive maintenance and technical services.";
    include "../widgets/services/image_text_widget.php"
    ?>
</div>

<?php include "../includes/footer.php" ?>