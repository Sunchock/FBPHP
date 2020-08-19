<?php
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '597810607548604',
	'app_secret' => 'a8c09aaf47211cdfa3821c294958cea6',
	'default_graph_version' => 'v2.10',
]);

/* PHP SDK v5.0.0 */
/* TODO
1 - Get UserID
2 - Get PageID
3 - Get Page access_token (!= user access_token !!!)
4 - Feed Page with his own access_token and message
*/
/* make the API call */
/*try {
	// Returns a `Facebook\FacebookResponse` object
	$response = $fb->get(
	  '/{page-id}_{post-id}/',
	  '{access-token}'
	);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
	echo 'Graph returned an error: ' . $e->getMessage();
	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
	exit;
}
$graphNode = $response->getGraphNode();*/
/* handle the result */
?>
<!DOCTYPE>
<html>
	<head>
		<title>Facebook PHP Localhost</title>
	</head>
	<body>
		<p>YEAH</p>
	</body>
</html>