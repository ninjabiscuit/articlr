<?php
$pageTitle = "New article";
include("inc/page/header.php");
include("inc/page/navigation.php");
?>

<form action="">
  <fieldset>
    <ul>
      <li>
        <label for="tags">Tags</label>
        <textarea id="tags"></textarea>
      </li>
    </ul>
  </fieldset>
</form>



<div class="column25">
    <?php
        include("inc/relatedTweets.php");
        include("inc/relatedArticles.php");
        include("inc/peopleNearby.php");
        include("inc/myLocation.php");
    ?>
</div>

<?php
include("inc/relatedPictures.php"); 
include("inc/page/footer.php");
?>