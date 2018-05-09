<?php
require "vendor/autoload.php";
$access_token = 'h6qzlIg7k7SdqLjiq4CCa+AuVQpCGoPF+cg78G+HlBrBH1v6u2D/SP6slIAsydQAqqUoFR3Z5XVRlh4CnTULSDEkZmeUwXHUhTcu2N+XzgUTQVWW4oOrlMQnoIORLgV6H52Ctn3cEuIOrPUJbXWDTQdB04t89/1O/w1cDnyilFU=';
$channelSecret = '81723630c588835f06fbf9918436be6a';
$idPush = 'Ud5680fffd4957a5bc2af997beabc72ba'
  
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');

//$response = $bot->pushMessage($idPush, $textMessageBuilder);
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
