<?php
$api_key = 'AIzaSyDiGdW1omtUzdrmzwsn4ZMng28PZaMm33M';
$playlist_id =  'PL_omWBKCy7EnqiOWULmDKp04fykXy5cNc'; 
$api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId='. $playlist_id . '&key=' . $api_key;
      
$response=file_get_contents($api_url);
echo $response;
?>