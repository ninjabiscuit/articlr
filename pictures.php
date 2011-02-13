<?php
$pageTitle  = "New article";
$current    = "new";
include("inc/page/overlayHeader.php");
?>
<div id="content" class="wrapping">
    <h1>Pictures taken near you</h1>
    <div id="morePeople">
        <ul>
            <?php
            for ($j=0; $j<5; $j++) {
            for ($i=1; $i<6; $i++) {
            ?>
            <li class="wrapping">
                <a href="i/<?php echo $i;?>.jpg">
                    <img src="i/<?php echo $i;?>s.jpg" />                    
                </a>
            </li>
            <?php
            }
            }
            ?>
        </ul>
    </div>
</div>
<?php
include("inc/page/overlayFooter.php");
?>