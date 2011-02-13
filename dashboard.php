<?php
$pageTitle  = "New article";
$current    = "dashboard";
include("inc/page/header.php");
include("inc/data.php");
include("inc/page/navigation.php");
?>
<div class="column25">
<?php
include("inc/drafts.php");
?>
</div>
<div class="column25">
<?php
include("inc/buzzInTheArea.php");
?>
</div>
<div class="column25">
<?php
include("inc/colleagues.php");
?>
</div>
<div class="column25">
    <?php
        include("inc/interestedIn.php");
        include("inc/relatedTweets.php");
        include("inc/peopleNearby.php");
        include("inc/relatedArticles.php");        
    ?>
</div>

<?php
include("inc/page/footer.php");
?>