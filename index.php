<?php
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '{app-id}',
	'app_secret' => '{app-secret}',
	'default_graph_version' => 'v2.10',
]);

var_dump($fb);exit;
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