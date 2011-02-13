<?php
?>
<div id="buzz" class="wrapping">
    <h2>Local buzz</h2>
    <ul>
        <?php
        for($i=0; $i<count($buzz); $i++) {
            ?>
            <li><?php echo $buzz[$i];?></li>
            <?php
        }
        ?>
    </ul>
</div>