<?php
$feed = new SimplePie();
$feed->set_feed_url(array('http://twitter.com/flexewebs'));
$feed->set_item_limit(3);
$feed->init();
$feed->handle_content_type();
?>
<h2><a href="http://twitter.com/flexewebs">Twitter stream</a></h2>
<ol>
<?php

foreach ($feed->get_items() as $item)
{
		$title = $item->get_title();
		$date = $item->get_date();
		$title = str_replace("flexewebs:", "", $title);
		$link = $item->get_link();
		
		?>
		<li><a href="<?php echo $link;?>"><?php echo $title;?> <strong><?php echo $date;?></strong></a></li>
		<?php				
}
?>
</ol>
