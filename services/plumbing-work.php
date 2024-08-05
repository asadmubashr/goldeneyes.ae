<?php 
$title = "Home";
include "../includes/header_head.php";
include "../includes/header.php";
?>

<div class="section-container">
    <?php 
    $image = "contactus.jpg";
    $title = 'plumbing_work';
    include "../widgets/services/title_image_widget.php"
    ?>
</div>

<div class="section-container">
    <?php 
    $image = "plumbing_work.png";
    $title = 'Plumbing Work';
    $description = "Najma Al Shamil Technical Services, established in 2020 in Dubai, specializes in professional plumbing services. Our skilled team is equipped to handle various plumbing needs, including installations, repairs, and maintenance. With our commitment to excellence, we ensure reliable and efficient plumbing solutions for residential, commercial, and industrial properties. Trust us for all your plumbing needs in Dubai.";
    include "../widgets/services/image_text_widget.php"
    ?>
</div>

<?php include "../includes/footer.php" ?>