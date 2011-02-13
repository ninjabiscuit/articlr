<div id="relatedPictures" class="wrapping">    
    <h2>Local pictures</h2>
    <div class="actions">
        <a href="pictures.php" class="small awesome green primary colorbox">View more</a>
    </div>
    <div class="body">
        <ul>
            <?php
            for($i=1; $i<9; $i++) {
                ?>
                <li><a rel="picture" href="i/<?php echo $keyword;?>/<?php echo $i;?>l.jpg"><img src="i/<?php echo $keyword;?>/<?php echo $i;?>l.jpg" /></a></li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>