<?php

function post_json($url, $json, $userId = null, $token = null, $systemId = null)
{
	$curl = curl_init();
	$method = 'POST';
	$headers = [
		"Content-Type: application/json"
	];
	
	if ($userId)
	{
		$headers[] = "UserId: $userId";
	}
	
	if ($token)
	{
		$headers[] = "Token: $token";
	}
	
	if ($systemId)
	{
		$headers[] = "SystemId: $systemId";
	}
	
	curl_setopt_array($curl, [
	  CURLOPT_URL => $url,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => $method,
	  CURLOPT_POSTFIELDS => $json,
	  CURLOPT_HTTPHEADER => $headers
	]);
	
	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	curl_close($curl);
	
	return $err ? "cURL Error $err" : $response;
}