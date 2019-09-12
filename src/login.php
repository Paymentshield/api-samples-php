<?php

require_once 'config.php';
require_once 'include/curl_wrapper.php';

// Gets the credentials from config.php
$data = [
	'Email' => $emailAddress,
	'Password' => $password
];

$json = json_encode($data);
$url = 'https://apiuat.paymentshield.co.uk/Security/Login';

$response = post_json($url, $json);

echo $response;