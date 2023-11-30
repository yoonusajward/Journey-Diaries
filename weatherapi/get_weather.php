<?php
$location = $_GET['location'];
$apiKey = 'bf5014e157b3f2edd533d7bced5e3ba8';
$apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$location}&units=metric&appid={$apiKey}";

$response = file_get_contents($apiUrl);

if ($response) {
    header("Content-type: application/json");
    echo $response;
} else {
    error_log("Error fetching weather data: " . error_get_last());
    echo json_encode(array('error' => 'Unable to fetch weather data.'));
}
?>
