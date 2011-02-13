<?php
$pageTitle  = "New article";
$current    = "new";
include("inc/page/overlayHeader.php");
?>
<div id="content" class="wrapping">
    <h1>Local tweets related to your article</h1>
    <div id="morePeople">
        <ul>
            <?php
            for ($j=0; $j<10; $j++) {
            for ($i=1; $i<9; $i++) {
            ?>
            <li id="status_36434706987880449" class="hentry status search_result u-Cer">
            <span class="status-body">
                <span class="thumb vcard author">
                    <a href="http://twitter.com/Cer" class="tweet-url profile-pic"><img src="http://a1.twimg.com/profile_images/1220943877/Mauer-betlehem_normal.jpg" alt="Mauer-betlehem_normal"></a>
                </span>
	        <a class="username tweet-url screen-name" href="http://twitter.com/Cer">Cer</a>
                    <span class="msgtxt en" id="msgtxt36434706987880449">Egyptians are cleaning the army tanks in <a class="tweet-url hashtag" title="#Tahrir">#Tahrir</a> :)) <a onclick="pageTracker._setCustomVar(2, 'result_type', 'recent', 3);pageTracker._trackPageview('/intra/hashtag/#Egypt');" href="/search?q=%23Egypt" class="tweet-url hashtag" title="#Egypt">#<b>Egypt</b></a> <a onclick="pageTracker._setCustomVar(2, 'result_type', 'recent', 3);pageTracker._trackPageview('/intra/hashtag/#Jan25');" href="/search?q=%23Jan25" class="tweet-url hashtag" title="#Jan25">#Jan25</a> <a href="/search?q=%23FreeEgypt" class="tweet-url hashtag" title="#FreeEgypt">#FreeEgypt</a></span>
                </a>
            </span>
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