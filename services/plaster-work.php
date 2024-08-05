<?php 
$title = "Home";
include "../includes/header_head.php";
include "../includes/header.php";
?>

<div class="section-container">
    <?php 
    $image = "contactus.jpg";
    $title = 'plaster_work';
    include "../widgets/services/title_image_widget.php"
    ?>
</div>

<div class="section-container">
    <?php 
    $image = "plaster_work.png";
    $title = 'Plaster Work';
    $description = "Najma Al Shamil Technical Services, established in 2020 in Dubai, specializes in high-quality plasterwork. Our experienced team delivers flawless plastering services for walls, ceilings, and surfaces, transforming your space into a work of art. With a commitment to excellence, we ensure that every detail is meticulously crafted to perfection. Trust us for all your plasterwork needs as we aim to provide exclusive maintenance and technical services that elevate the aesthetics and functionality of your property.";
    include "../widgets/services/image_text_widget.php"
    ?>
</div>

<?php include "../includes/footer.php" ?>