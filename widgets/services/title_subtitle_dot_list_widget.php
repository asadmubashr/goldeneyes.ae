<h3 style="color: #262d55; "><?php echo $title ?></h3>
<p style="color: rgb(50, 50, 50); margin-bottom: 3px; font-size: 17px; font: Raleway;"><?php echo $subtitle ?></p>

<ul>
    <?php
    foreach ($listItems as $item) {
        // Replace occurrences of "business" with bold version
        $item = str_replace("Exemption from 5% customs duty on imported goods.", "<span style='color: #e65100'>Exemption from 5% customs duty on imported goods.</span>", $item);
        ?>
        <li>
            <p style="color: rgb(50, 50, 50); margin-bottom: 3px; font-size: 17px;"><?php echo $item ?></p>
        </li>
        <?php
    }
    ?>
</ul>