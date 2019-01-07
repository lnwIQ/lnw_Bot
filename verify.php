<?php
$access_token = 'SUQzV6LUbAh9l2Ed0RL4kGv9NUzUI+Pi1ZOw/jY5dRd4oYBOKsTN7pEQ85E8TAo5UVQt3XimJ84lj+MfHFH8fqmUH3fL6Gk+kVL6f4dH3VrmTrFHYbWF0bYc8MPdsQ8HtLJ5cFqfzTBQOJpwS0eaoAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:R5YfN2Bkou0igij';
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
