<div id="peopleNearby" class="wrapping">
    <h2>People near by</h2>
    <ul>
        <?php
        for ($i=1; $i<10; $i++) {
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