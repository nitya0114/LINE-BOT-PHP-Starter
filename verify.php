<?php
$access_token = '1oss7tO2qOnlJQE/+Fm0nbVSR1XTm5HZQSNDG7CmaO7AJSNLbpW6OpdXmHDjprR7nH42WCOxgaa/KKTQlLrSvXCmZbLUxmoCqrlvst5rntupQcQX5sqx2gZ4lfsL9xBdoWT23Sg+F2/CncgiYPl8wwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
