<?php 
$title = "Home";
include "../includes/header_head.php";
include "../includes/header.php";
?>

<div class="section-container">
    <?php 
    $image = "contactus.jpg";
    $title = 'skill_unskilled_worker_supply';
    include "../widgets/services/title_image_widget.php"
    ?>
</div>

<div class="section-container">
    <?php 
    $image = "skill_unskilled_worker_supply.png";
    $title = 'Skill & Unskilled Worker Supply';
    $description = "Najma Al Shamil Technical Services, established in 2020 in Dubai, specializes in skilled and unskilled worker supply services. We understand the importance of a qualified workforce in the successful execution of projects. Whether you need skilled technicians or reliable unskilled workers, we provide tailored solutions to meet your staffing requirements. With our dedication to excellence, we aim to provide exclusive maintenance and technical services, ensuring your projects are handled efficiently and professionally. Trust us for all your workforce supply needs, as we strive to be your reliable partner in building a successful future.";
    include "../widgets/services/image_text_widget.php"
    ?>
</div>

<?php include "../includes/footer.php" ?>