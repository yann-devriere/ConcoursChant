<?php
$data = [
    'api_token' => '1f32015ee31e8a0c5b8109376e9cf728',
    'url' => 'https://audd.tech/example.mp3',
    'return' => 'apple_music,spotify',
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_URL, 'https://api.audd.io/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>