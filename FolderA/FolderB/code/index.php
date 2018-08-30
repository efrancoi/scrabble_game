<?php
$verb = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['PATH_INFO'];
$routes = explode("/", $uri);
if ($routes[1] == "andy"){
  $age = $routes[2];
  echo json_encode(Array("year"=> 1983 + $age, "age"=>$age));
} else {
  echo "Usage: /FolderA/FolderB/code/:age";
}
//print_r($routes);
?>