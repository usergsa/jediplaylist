<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://payeer.com/api/trade/info");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

$response = curl_exec($ch);
curl_close($ch);

echo '<pre>'; print_r(json_decode($response, true)); echo '</pre>';
<?
