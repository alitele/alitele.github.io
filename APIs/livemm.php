<?php

$url = 'http://mmmm.in/makkah-madinah-app-images/app-channels.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed
echo json_encode($characters);

?>
