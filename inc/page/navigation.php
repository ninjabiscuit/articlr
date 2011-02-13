<div id="navigation">
    <ul>
        <li><a href="dashboard.php"<?php if($current=='dashboard') { echo "class=\"active\"";} ?>>Dashboard</a></li>
        <li><a href="myarticles.php" <?php if($current=='myarticles') { echo "class=\"active\"";} ?>>My Articles</a></li>
        <li><a href="brandnew.php" <?php if($current=='new') { echo "class=\"active\"";} ?>>New Article</a></li>
    </ul>
</div>