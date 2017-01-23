<?php
$html = "";
$url = "http://lifeinthefastlane.com/tag/litfl-rv/feed/";
$xml = simplexml_load_file($url);

for($i = 0; $i < 10; $i++){
	$title = $xml->channel->item[$i]->title;
	$link = $xml->channel->item[$i]->link;
	$description = $xml->channel->item[$i]->description;
	$pubDate = $xml->channel->item[$i]->pubDate;

  $html .= "<a href='$link'><h3>$title</h3></a>";
	$html .= "$description";
	$html .= "<br />$pubDate<hr style='border: 2px solid white;' />";
}
echo $html;
?>
