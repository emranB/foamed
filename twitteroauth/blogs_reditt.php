<?php
// $html = "";
// $url = "https://www.reddit.com/r/Foamed.rss";
// $xml = simplexml_load_file($url);

// for($i = 0; $i < 10; $i++){
// 	$title = $xml->channel->item[$i]->title;
// 	$link = $xml->channel->item[$i]->link;
// 	$description = $xml->channel->item[$i]->description;
// 	$pubDate = $xml->channel->item[$i]->pubDate;
//
//   $html .= "<a href='$link'><h3>$title</h3></a>";
// 	$html .= "$description";
// 	$html .= "<br />$pubDate<hr style='border: 2px solid white;' />";
// }
// echo $html;
//

?>


<?php
//Feed URLs
$feeds = array(
    "http://maxburstein.com/rss",
    "http://www.engadget.com/rss.xml",
    "https://www.reddit.com/r/Foamed.rss",
);

//Read each feed's items
$entries = array();
foreach($feeds as $feed) {
    $xml = simplexml_load_file($feed);
    $entries = array_merge($entries, $xml->xpath("//item"));
}

//Sort feed entries by pubDate
usort($entries, function ($feed1, $feed2) {
    return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);
});

?>

<?php
//Print all the entries
foreach($entries as $entry){
    ?>
    <li><a href="<?= $entry->link ?>"><?= $entry->title ?></a> (<?= parse_url($entry->link)['host'] ?>)
    <p><?= strftime('%m/%d/%Y %I:%M %p', strtotime($entry->pubDate)) ?></p>
    <p><?= $entry->description ?></p></li>
    <?php
}
?>
