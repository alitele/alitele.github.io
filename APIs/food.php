<?php
$pageToken=$_GET['pagetoken'];
$baseUrl = 'https://www.googleapis.com/youtube/v3/';
$apiKey = 'AIzaSyDiGdW1omtUzdrmzwsn4ZMng28PZaMm33M';
//$channelId='PLMWg5ldfZmShITykLSVWQPWic8FX0Z_sf';

$channelId = 'UClkIneW_r2Sp2mjdFt2X4rg';
 
$url = $baseUrl .'channels?' .
    'id=' . $channelId .
    '&part=contentDetails' . 
    '&key=' . $apiKey;
$json = json_decode(file_get_contents($url), true);
 
$playlist = $json['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
 
$url = $baseUrl .'playlistItems?' .
 'part=snippet' .
 '&maxResults=5' .
 '&pageToken='.$pageToken. 
 '&playlistId=' . $playlist .
 '&key=' . $apiKey;
 
 
$ch = curl_init($url);
curl_exec($ch);

?>