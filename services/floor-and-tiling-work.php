<?php 
$title = "Home";
include "../includes/header_head.php";
include "../includes/header.php";
?>

<div class="section-container">
    <?php 
    $image = "contactus.jpg";
    $title = 'floor_tiling_work';
    include "../widgets/services/title_image_widget.php"
    ?>
</div>

<div class="section-container">
    <?php 
    $image = "floor_tiling_work.png";
    $title = 'Floor & Tiling Work';
    $description = "Najma Al Shamil Technical Services, established in 2020 in Dubai, excels in floor and tiling work. Our expert team delivers exceptional installation and repair services, ensuring precision and quality craftsmanship. Whether it's for residential, commercial, or industrial spaces, we provide a wide range of flooring and tiling options to enhance the aesthetics and functionality of your property. Trust us for all your floor and tiling needs in Dubai.";
    include "../widgets/services/image_text_widget.php"
    ?>
</div>

<?php include "../includes/footer.php" ?>