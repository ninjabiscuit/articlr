<div id="relatedPictures" class="wrapping">    
    <h2>Local pictures</h2>
    <div class="actions">
        <a href="pictures.php" class="small awesome green primary colorbox">View more</a>
    </div>
    <ul>
        <?php
        for($i=1; $i<6; $i++) {
            ?>
            <li><a rel="picture" href="i/<?php echo $i;?>.jpg"><img src="i/<?php echo $i;?>s.jpg" /></a></li>
            <?php
        }
        ?>
    </ul>    
</div>