<?php
$pageTitle  = "New article";
$current    = "brandnew";
include("inc/page/header.php");
include("inc/data.php");
include("inc/page/navigation.php");
?>

<div class="column75">
    <form>
        <div id="message">
            <p>These are the suggestions for what you could write about from this
            area right now which are not covered by other publishers yet.</p>
        </div>
        <article contenteditable="true" class="wrapping">

        <h1>Judges from Google and Guardian disect the hacks</h1>

        <p>Geolocation hack</p>
        <p>Art and mood audio</p>
        <p>Journalist collaboration tool</p>
        <p>Articlr</p>
        <p>Prizes and awards</p>
        <p>2 day hack day</p>
        <p>Guardian mashup</p>
        
        </article>
        <div class="actions">
            <input type="submit" value="Publish" class="large awesome green primary" />
            <input type="button" value="Save" class="medium awesome blue primary" />
            <input type="button" value="Cancel" class="small awesome yellow secondary" />
        </div>
    </form>
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