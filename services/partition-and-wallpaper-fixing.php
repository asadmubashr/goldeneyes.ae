<?php 
$title = "Home";
include "../includes/header_head.php";
include "../includes/header.php";
?>

<div class="section-container">
    <?php 
    $image = "contactus.jpg";
    $title = 'partition_wallpaper_fixing';
    include "../widgets/services/title_image_widget.php"
    ?>
</div>

<div class="section-container">
    <?php 
    $image = "floor_tiling_work.png";
    $title = 'Partition & Wallpaper Fixing';
    $description = "Najma Al Shamil Technical Services, established in 2020 in Dubai, specializes in partition and wallpaper fixing services. Our skilled team ensures precise and efficient installation, providing stylish partitions and flawless wallpaper application. We offer a wide range of options to transform your space and create a visually appealing environment. Trust us for all your partition and wallpaper fixing needs in Dubai.";
    include "../widgets/services/image_text_widget.php"
    ?>
</div>

<?php include "../includes/footer.php" ?>