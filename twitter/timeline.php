<?php
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');

/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_GET['token'], $_GET['secret']);
$connection->decode_json = FALSE;

/* If method is set change API call made. Test is called by default. */
$content = $connection->get('statuses/user_timeline', array('count' => '5'));
$content = json_decode ($content, true);

$output = array();

for ($i = 0; $i < count($content); $i++)
{
	$output[$i]['text'] = $content[$i]['text'];
	$output[$i]['time'] = $content[$i]['created_at'];
}

$output = json_encode($output);
echo $output;
?>