<?php

require_once 'config.php';
require_once 'include/curl_wrapper.php';

// Get the credentials from the POST to this address
// (the SystemID will come from config.php)
$userId = $_GET['userId'];
$token = $_GET['token'];

$data = [
  'ProductId' => 1010,
  'BranchNumber' => 'PS180092',
  'UseDefaults' => true,
  'IsIndicativeQuote' => false,
  'HasAssumedAnswers' => false,
  'CommissionSacrifice' => 0.0,
  'Answers' => 
  [
	[ 'Value' => 'Mr', 'InterfaceKey' => 'Applicant1Title' ],
    [ 'Value' => 'Lee', 'InterfaceKey' => 'Applicant1Forename' ],
    [ 'Value' => 'Liability', 'InterfaceKey' => 'Applicant1Surname' ],
    [ 'Value' => '01/05/1985', 'InterfaceKey' => 'Applicant1DoB' ],
    [ 'Value' => '01704555888', 'InterfaceKey' => 'Applicant1TelNo' ],
    [ 'Value' => 'Test@test.com', 'InterfaceKey' => 'Applicant1EmailAddress' ],
    [ 'Value' => 'SixMonths', 'InterfaceKey' => 'TermOfInsurance' ],
    [ 'Value' => 'PR8 2NR', 'InterfaceKey' => 'InsuredAddressPostCode' ],
    [ 'Value' => '404 Selworthy Road', 'InterfaceKey' => 'InsuredAddressStreet' ],
    [ 'Value' => 'Birkdale', 'InterfaceKey' => 'InsuredAddressDistrict' ],
    [ 'Value' => 'Southport', 'InterfaceKey' => 'InsuredAddressTown' ],
    [ 'Value' => 'Merseyside', 'InterfaceKey' => 'InsuredAddressCounty' ],
    [ 'Value' => 'True', 'InterfaceKey' => 'MainUKResidence' ],
    [ 'Value' => 'True', 'InterfaceKey' => 'TenancyAgreement' ],
    [ 'Value' => 'False', 'InterfaceKey' => 'ContentsInsurance' ],
	[ 'Value' => '30/09/2019', 'InterfaceKey' => 'PolicyStartDate' ]
  ]
];

$json = json_encode($data);
$url = 'https://apiuat.paymentshield.co.uk/Quote';

$response = post_json($url, $json, $userId, $token, $systemId);

echo $response;