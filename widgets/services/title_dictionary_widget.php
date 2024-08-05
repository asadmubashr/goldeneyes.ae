<h3 style="color: #262d55; "><?php echo $title ?></h3>
<?php
foreach ($dictionary as $key => $value) {
    ?>
    <p style="color: #262d55; margin-bottom: 3px; font-weight: 400;"><?php echo $key;?></p>
    <p style="color: rgb(50, 50, 50); margin-bottom: 10px; font-weight: normal;"><?php echo $value;?></p>
    <?php
}
?>