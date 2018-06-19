<?php



require "vendor/autoload.php";

$access_token = 'J6bNuT1wEIjZp8uwi47Z91mcpgtOQE6htEO8T2qWEj0+hLNPXKJbfRiNeBKIGFSswvKvo2Zxyn0FIuOOmUoDdRLu1zHdZjG1+gNU4rhTKBwoyjNiL2vt/cgSrzeq+SNvG1FuW2r2HaN+Gr+/NA8tXAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '48003d336a991184dcc5c8ba84e843cf';

//$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';
$pushID = 'U08c18e040bf6df694d6e3cdd07cf6431';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







