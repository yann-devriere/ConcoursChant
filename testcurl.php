<?php

$chanson = $_POST['titre'];
$artiste = $_POST['artiste'];

$artisteSpace = str_replace(" ", "%20", $artiste);
$chansonSpace = str_replace(" ", "%20", $chanson);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://217.182.174.155:5000/ws/2/recording?query=recording:$chansonSpace%20AND%20artist:$artisteSpace%20&fmt=json");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$response = curl_exec($ch);
echo"<script>console.log($response)</script>";
if (curl_errno($ch)) {
	echo curl_error($ch);
}

?>

<!-- 217.182.174.155:5000 -->