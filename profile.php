<?php


$access_token = 'h6qzlIg7k7SdqLjiq4CCa+AuVQpCGoPF+cg78G+HlBrBH1v6u2D/SP6slIAsydQAqqUoFR3Z5XVRlh4CnTULSDEkZmeUwXHUhTcu2N+XzgUTQVWW4oOrlMQnoIORLgV6H52Ctn3cEuIOrPUJbXWDTQdB04t89/1O/w1cDnyilFU=';
$channelSecret = '81723630c588835f06fbf9918436be6a';
$userId = 'Ud5680fffd4957a5bc2af997beabc72ba';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

//echo $result;
echo"<li>userId = $result[1]</li>";

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$response = $bot->getProfile($userId);
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    //echo $profile['displayName'];
    echo"<li>displayName = $profile['displayName']</li>";
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}
