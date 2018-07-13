<?php
$access_token = '2r+PBXRg1Jps+zXQjyQ7sy8zJSiNTmBNpgL+gj2W2MoquoHLJP7zRZxhL+MZ/mipnH42WCOxgaa/KKTQlLrSvXCmZbLUxmoCqrlvst5rntvn9dfYpbs+LNGcaOuzLeT3DwOTs+lAD4B83gAiZc4yAQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
