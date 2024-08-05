<?php 
$title = "Home";
include "../includes/header_head.php";
include "../includes/header.php";
?>

<div class="section-container">
    <?php 
    $image = "contactus.jpg";
    $title = 'painting_work';
    include "../widgets/services/title_image_widget.php"
    ?>
</div>

<div class="section-container">
    <?php 
    $image = "painting_work.png";
    $title = 'Painting Work';
    $description = "Najma Al Shamil Technical Services, established in 2020 in Dubai, specializes in top-notch painting services. Our skilled team of painters delivers exquisite finishes for residential, commercial, and industrial properties. From interior to exterior painting, we pay attention to detail, ensuring a flawless and vibrant transformation of your space. With our commitment to excellence, we aim to provide exclusive maintenance and technical services that elevate the aesthetics and appeal of your property. Trust us for all your painting needs, and experience the true essence of professional craftsmanship.";
    include "../widgets/services/image_text_widget.php"
    ?>
</div>

<?php include "../includes/footer.php" ?>