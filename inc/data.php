<?php
$keyword = $_GET['keywords'];
if(empty($keyword)) {
    $keyword = 'gsxsw'; 
}
if($keyword == 'egypt') {
    include("inc/data/egypt.php");
}
else
{
    include("inc/data/gsxsw.php");
}
?>