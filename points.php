<?php

// Шапка

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

header('Access-Control-Allow-Credentials: true');

header('Access-Control-Allow-Headers: Authorization, Origin, X-Requested-With, Accept, X-PINGOTHER, Content-Type');

if (isset($_GET['x']) && isset($_GET['y'])) {
  $x = $_GET['x'];
  $y = $_GET['y'];
  $jsonpoints = file_get_contents('points.json');
  $jsonpointsarray = json_decode($jsonpoints, true);
  $newPoint = [
        'x' => $x,
        'y' => $y,
        'color' => 'black',
   ];
  $jsonpointsarray[] = $newPoint;
  $pointsjson = json_encode($jsonpointsarray);
  file_put_contents('points.json', $pointsjson);

} else {
  error_log("NO X any Y");
}
