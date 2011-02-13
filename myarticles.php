<?php
$pageTitle  = "New article";
$current    = "myarticles";
include("inc/page/header.php");
include("inc/page/navigation.php");
?>

<div class="column75 wrapping">
    <h1>My Articles and their performance</h1>
    <ul>
        <li>
            <h2>GSXSW becomes the most amazing hack event of all time</h2>
            <p>Retweeted <strong>1243425</strong> times</p>

            <p></p>
            <div class="actions">
                <a href="newarticle.php" class="awesome small green primary">Edit</a>
            </div>
        </li>
        <li>
            <h2>GSXSW in numbers</h2>
            <p>Retweeted <strong>12345</strong> times</p>

            <div class="actions">
                <a href="newarticle.php" class="awesome small green primary">Edit</a>
            </div>
        </li>
        <li>
            <h2>Mubaraks last minute rush to hide his billions</h2>
            <p>Retweeted <strong>125</strong> times</p>

            <p></p>
            <div class="actions">
                <a href="newarticle.php?keywords=egypt" class="awesome small green primary">Edit</a>
            </div>
        </li>
    </ul>
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