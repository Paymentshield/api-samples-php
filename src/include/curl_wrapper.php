<?php

function post_json($url, $json)
{
	$curl = curl_init();
	$method = 'POST';

	curl_setopt_array($curl, [
	  CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => $method,
	  CURLOPT_POSTFIELDS => $json,
	  CURLOPT_HTTPHEADER => [
		"Content-Type: application/json"
	  ]
	]);
	
	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	curl_close($curl);
	
	return $err ? "cURL Error $err" : $response;
}