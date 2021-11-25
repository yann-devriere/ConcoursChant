<?php
$ch = curl_init();
$proxy = '172.16.0.254:3128';
$proxyauth = 'yann.devriere:Devriere1234';


curl_setopt($ch, CURLOPT_URL, "http://musicbrainz.org/ws/2/artist/?query=artist:vanessa%20paradis");
curl_setopt($ch, CURLOPT_PROXY, $proxy);     
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$response = curl_exec($ch);
if (curl_errno($ch)) {
	echo curl_error($ch);
}

?>

<!-- 217.182.174.155:5000 -->