<?php


$access_token = 'J6bNuT1wEIjZp8uwi47Z91mcpgtOQE6htEO8T2qWEj0+hLNPXKJbfRiNeBKIGFSswvKvo2Zxyn0FIuOOmUoDdRLu1zHdZjG1+gNU4rhTKBwoyjNiL2vt/cgSrzeq+SNvG1FuW2r2HaN+Gr+/NA8tXAdB04t89/1O/w1cDnyilFU=';

$userId = 'U08c18e040bf6df694d6e3cdd07cf6431';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

