$msec = round(microtime(true) * 1000);

$apiId = '97d91c93-9ee9-422d-89ce-a997bf3f5c24';
$apiSecret = 'yOHSNVyAycLwWQxQ';

$method = 'account';

$req = json_encode(array(
'ts' => $msec,
));

$sign = hash_hmac('sha256', $method.$req, $apiSecret);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://payeer.com/api/trade/".$method);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $req);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"Content-Type: application/json",
"API-ID: ".$apiId,
"API-SIGN: ".$sign
));

$response = curl_exec($ch);
curl_close($ch);

echo '<pre>'; print_r(json_decode($response, true)); echo '</pre>';
