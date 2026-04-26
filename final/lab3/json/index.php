<?php
$json_data = file_get_contents("data.json");
$decoded_json_data = json_decode($json_data);
echo $decoded_json_data[0];
echo "<br>";

$arr = ["key"=>"value"];
$encoded_data = json_encode($arr);
print_r($encoded_data);