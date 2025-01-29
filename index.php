<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$response = [
    "email" => "oluwakayodeakintayo@gmail.com",
    "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"),
    "github_url" => "https://github.com/VictorAkintayo/HNG12_task1"
];

echo json_encode($response);
?>
