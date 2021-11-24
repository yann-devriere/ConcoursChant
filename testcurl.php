<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.wikipedia.org/");
$response = curl_exec($ch);
if (curl_errno($ch)) {
	echo curl_error($ch);
}

?>