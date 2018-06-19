<?php
$access_token = 'LsaJUEDZUoXs2tUNWQtnP+N1Tqva/lc0iqNtld1Boc7ByXl50abFcKJtxv5a23SCwvKvo2Zxyn0FIuOOmUoDdRLu1zHdZjG1+gNU4rhTKBznCqgEim0hergHkm3rpHqCGMos4Rd1ML5AvfDTHcRN6AdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
