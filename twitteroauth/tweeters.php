<style>
a.twitter-timeline, a.twitter-mention-button{
  display: none;
}
</style>


<?php
include "twitteroauth.php";

$consumer_key = "n27OgGtVBWG36oqmx1mc8fzVF";
$consumer_secret = "ycBV8RX041xKHjAzswfTpiAH7kruArN4i3RdaKeaZaHToTDJOa";
$access_token = "756700051242622976-hlcYr9c66L4iuuKTfsM8faZkF1NIsT6";
$access_token_secret = "Dv78Tnh7vzBzklTwQZnePgZPExt9Zr7BSoAvmbMJyCNWH";

$twitter = new TwitterOAuth( $consumer_key, $consumer_secret, $access_token, $access_token_secret );
?>

<?php
$search_user = $_REQUEST['search_user'];
echo "<div class='col-xs-12 col-md-12 col-lg-12 tweeter_timeline'>
        <a data-chrome='transparent' class='twitter-timeline' width='650px' height='800px' href='https://twitter.com/$search_user'>
          Tweets by @ $search_user
          </a>
      </div>";

echo "<div class='col-xs-12 col-md-12 col-lg-12 tweet_button'>
        <a href='https://twitter.com/intent/tweet?screen_name=$search_user' class='twitter-mention-button' data-size='large' data-show-count='false'>
          Tweet to @ $search_user
        </a>
      </div>";
?>

<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
