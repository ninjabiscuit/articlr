<?php
$pageTitle  = "New article";
$current    = "new";
include("inc/page/overlayHeader.php");
?>
<div id="content" class="wrapping">
    <h1>People near you</h1>
    <div id="morePeople">
        <ul>
            <?php
            for ($j=0; $j<10; $j++) {
            for ($i=1; $i<9; $i++) {
            ?>
            <li class="wrapping">
                <a href="">
                    <img src="i/profiles/<?php echo $i;?>.jpg" />
                    <span class="name">Jason Grant</span>
                    <span class="username">@flexewebs</span>
                    <p>This is a description of who this person is and what they are
                    all about and gives more insight into whether they are relevant
                    to this journalist.</p>
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