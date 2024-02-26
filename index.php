<?php

$request_uri = $_SERVER["REQUEST_URI"];
$request = $_REQUEST;

$path = strtok($request_uri, '?');

if($path == "/resellerclub") {
   include "paymentpage.php";
}
else {
	echo "<pre>";
	print_r($url);
	print_r($request);
	print_r($request_uri);
}

?>
