<?php
$pageTitle  = "New article";
$current    = "new";
include("inc/page/header.php");
?>
<div id="content">
    <h1>People near you</h1>
    <ul>
        <?php
        for ($i=1; $i<9; $i++) {
        ?>
        <li>
            <a href="">
                <img src="i/profiles/<?php echo $i;?>.jpg" />
                <span class="username">@flexewebs</span>
            </a>
        </li>
        <?php
        }
        ?>
    </ul>
</div>
<?php
include("inc/page/footer.php");
?>