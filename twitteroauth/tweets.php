<?php

include "twitteroauth.php";

$consumer_key = "n27OgGtVBWG36oqmx1mc8fzVF";
$consumer_secret = "ycBV8RX041xKHjAzswfTpiAH7kruArN4i3RdaKeaZaHToTDJOa";
$access_token = "756700051242622976-hlcYr9c66L4iuuKTfsM8faZkF1NIsT6";
$access_token_secret = "Dv78Tnh7vzBzklTwQZnePgZPExt9Zr7BSoAvmbMJyCNWH";

$twitter = new TwitterOAuth( $consumer_key, $consumer_secret, $access_token, $access_token_secret );
?>

<?php

$hashtag = $_REQUEST['hashtag'];
$number_of_results = $_REQUEST['number_of_results'];

$find_tweets = "https://api.twitter.com/1.1/search/tweets.json?q=$hashtag&result_type=recent&count=$number_of_results";
$tweets = $twitter->get($find_tweets);

foreach ($tweets as $tweet) {
  foreach ($tweet as $t) {

    $src = $t->user->profile_image_url;
    $name = $t->user->name;
    $text = $t->text;
    $created_at = $t->created_at;
    $url = $t->user->url;

    // preg_match_all('!https?://\S+!', $text, $matches);
    // $all_urls = $matches[0];
    // echo "<h1>$all_urls</h1>";

    echo " Tweet: <br />" .
         " <img width='150px' height='150px' src='$src' /> " .
         " <b>$name</b> " . " <i>&nbsp Tweeted at: $created_at</i> " . " <br /> " . $text . " <br /> " .
         " <a href='$url'> $url </a> " . " <br /><hr /> ";

  }
}

?>
