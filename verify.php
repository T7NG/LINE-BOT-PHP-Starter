<?php
$access_token = 'iCiXOLyn+OZycGrHso5wo9QVtSj4HllBbbeQdiVJxUQigrkHAsxt+SRyPU7Y4sqSfK3FYxJzIogyabCQTQW7yPCCD3MAyHMO9jYSaMYGOpDw1Lj09VCyIYkHhjjBmEZnvWI0j2KO4RTl0jHr1+9PxAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
