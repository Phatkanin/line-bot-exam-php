<?php



require "vendor/autoload.php";

$access_token = 'LsaJUEDZUoXs2tUNWQtnP+N1Tqva/lc0iqNtld1Boc7ByXl50abFcKJtxv5a23SCwvKvo2Zxyn0FIuOOmUoDdRLu1zHdZjG1+gNU4rhTKBznCqgEim0hergHkm3rpHqCGMos4Rd1ML5AvfDTHcRN6AdB04t89/1O/w1cDnyilFU=';

$channelSecret = '48003d336a991184dcc5c8ba84e843cf';

$pushID = 'U08c18e040bf6df694d6e3cdd07cf6431'; //เครื่องadmin
$pushID = 'U29dc4c45a04b287d60bde5734fc6e1ba'; //เครื่องพี่ยศ

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('Hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







