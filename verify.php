<?php
$access_token = 'J6bNuT1wEIjZp8uwi47Z91mcpgtOQE6htEO8T2qWEj0+hLNPXKJbfRiNeBKIGFSswvKvo2Zxyn0FIuOOmUoDdRLu1zHdZjG1+gNU4rhTKBwoyjNiL2vt/cgSrzeq+SNvG1FuW2r2HaN+Gr+/NA8tXAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
