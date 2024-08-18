<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://payeer.com/api/trade/ticker");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
'pair' => 'TRX_RUB',
)));

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"Content-Type: application/json"
));

$response = curl_exec($ch);
curl_close($ch);

//echo print_r(json_decode($response=>pairs, true));
echo $response
?>
