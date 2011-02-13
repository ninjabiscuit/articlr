<div id="peopleNearby" class="wrapping">
    <h2 class="openclose">People near by</h2>
    <div class="body">
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
        <div class="actions">
            <a href="people.php" class="small awesome green primary">View more</a>
        </div>
    </div>
</div>