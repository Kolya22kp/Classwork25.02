<?php 

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

header('Access-Control-Allow-Credentials: true');

header('Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Accept, X-PINGOTHER, Content-Type');

$x = $_GET["x"];
$y = $_GET["y"];

$color = ["red", "green", "blue", "black", "purple", "yellow", "aqua", "orange"];

$array = [
  "x" => $x,
  "y" => $y,
  "color" => $color[rand(0, 7)],
];

$array_json = file_get_contents("points.json");
$array_decode_json = json_decode($array_json, true);
$array_decode_json[] = $array;
file_put_contents('points.json', json_encode($array_decode_json));

?>
