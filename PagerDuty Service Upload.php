<?php

$API_ACCESS_KEY = 'u+5n_XdrViGnYFELTyxQ';

$PAYLOAD = arry(
    'service' => array(
        'type' => 'string',
        'name' => 'string',
        'description' => 'string',
        'auto_resolve_timeout' => 'integer'
    )
)

$JSON = json_encode($PAYLOAD);

$URL = 'https://api.pagerduty.com/services';
$session = curl_init();

curl_setopt($session, CURLOPT_URL, $URL);
curl_setopt($session, CURLOPT_HTTPHEADER, array(
    'Content-type: application/json',
    'Authorization: Token token=' . $API_ACCESS_KEY
));
curl_setopt($session, CURLOPT_POSTFIELDS, $JSON);
$output = curl_exec($session);
?>