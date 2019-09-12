<?php

require_once 'config.php';
require_once 'include/curl_wrapper.php';

$data = [
	'ProductId' => 1010,
	'BranchNumber' => 'PS180092',
	'UseDefaults': true,
	'IsIndicativeQuote': false,
	'HasAssumedAnswers': false,
	'CommissionSacrifice': 0,
	'Answers': [
		['InterfaceKey' => 'Applicant1Title', 'Value' => 'Mr'],
		['InterfaceKey' => 'Applicant1Forename', 'Value' => 'Jess'],
		...
	]
];

$json = json_encode($data);
$url = 'https://apiuat.paymentshield.co.uk/Quote';

$response = post_json($url, $json);

echo $response;