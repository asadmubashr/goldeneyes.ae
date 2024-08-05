<h3 style="color: #262d55;"><?php echo $title ?></h3>
<p style="color: rgb(50, 50, 50);"><?php echo $subtitle ?></p>
<ol>
    <?php
    foreach ($listItems as $item) {
        // Replace occurrences of "business" with bold version
        $item = str_replace("Professional License –", "<span style='color: rgb(50, 50, 50); font-weight: bold;'>Professional License –</span>", $item);
        $item = str_replace("Commercial License –", "<span style='color: rgb(50, 50, 50); font-weight: bold;'>Commercial License –</span>", $item);
        $item = str_replace("Branch or Representative Office –", "<span style='color: rgb(50, 50, 50); font-weight: bold;'>Branch or Representative Office –</span>", $item);
        ?>
        <li>
            <p style="color: rgb(50, 50, 50); margin-bottom: 3px; font-size: 17;"><?php echo $item; ?></p>
        </li>
        <?php
    }
    ?>
</ol>
<p style="color: rgb(50, 50, 50);"><?php echo $footer ?></p>