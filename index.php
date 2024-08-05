<?php 
$title = "Home";
include "includes/header_head.php";
include "includes/header.php";
?>

<div class="section-container">
    <?php include "widgets/home/main.php" ?>
</div>

<div class="section-container">
    <?php include "widgets/home/we_believe.php" ?>
</div>

<section class="">
    <?php include "widgets/home/about_us.php" ?>
</section>

<section class="">
    <?php include "widgets/home/reliability.php" ?>
</section>

<section class="">
    <?php include "widgets/home/private_desk.php" ?>
</section>

<section class="">
    <?php include "widgets/home/private_office.php" ?>
</section>

<section class="">
    <?php include "widgets/home/meeting_room.php" ?>
</section>

<section class="">
    <?php include "widgets/home/office_sizes_available.php" ?>
    <hr style="height: 10px; border: none; background-color: var(--primary-color);">
</section>

<section class="">
    <?php include "widgets/home/our_exclusive_services.php" ?>
    <hr style="height: 10px; border: none; background-color: var(--primary-color);">
</section>

<section class="">
    <?php include "widgets/home/other_services.php" ?>
    <hr style="height: 10px; border: none; background-color: var(--primary-color);">
</section>

<div class="section-container">
    <?php include "widgets/home/setup_business.php" ?>
</div>

<div class="section-container">
    <?php include "widgets/home/send_inquiry.php" ?>
    <hr style="height: 10px; border: none; margin: 0px; background-color: var(--primary-color);">
</div>

<?php include "widgets/home/faq.php" ?>
<?php include "includes/footer.php" ?>