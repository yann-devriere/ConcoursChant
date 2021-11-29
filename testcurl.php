<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://217.182.174.155:5000/ws/2/artist/?query=artist:vanessa%20paradis&fmt=json");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$response = curl_exec($ch);
echo"<script>console.log($response)</script>";
if (curl_errno($ch)) {
	echo curl_error($ch);
}

?>

<!-- 217.182.174.155:5000 -->