<?php

$apiKey = '0b58a514737447fe917110900232805';
$city = 'Catania';
$country = 'IT';

// URL API
$url = "https://api.weatherapi.com/v1/current.json?key=$apiKey&q=$city,$country";

// Inizializzazione di CURL
$ch = curl_init();

// Opzioni di CURL per la chiamata API
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Esecuzione della chiamata API e memorizzazione della risposta
$response = curl_exec($ch);

curl_close($ch);

echo $response;

?>