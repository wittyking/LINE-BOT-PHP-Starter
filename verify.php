<?php
$access_token = 'eXUCLEtyEvkdI1gCWqEHIKmjtIUUfGIQZEHe2shkANNExaOCzKP8EHqAAsCjpMfgI9o0TSrrC1JHfm/uhu9NskwMzZ76qJLpcpg1ol3Wssc1IH8Wr1z1ljogbyoDeNY4c2wvgnneIU8i49RGkZK9SQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
