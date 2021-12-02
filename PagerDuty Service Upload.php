<?php

$API_ACCESS_KEY = 'u+5n_XdrViGnYFELTyxQ';

$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/services/';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY;
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
$output = curl_exec($session);
?>