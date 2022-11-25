<?php

require_once "vendor/autoload.php";
require_once "views/city/index.php";



$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $route) {

    $route->addRoute('GET', '/', ['App\Controllers\ApiController', $_GET["city"] ?? "Riga"]);

});



$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);


//$count = [];


$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:

        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];

        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];


        [$controller, $method] = $handler;
        $start = new $controller($method);

        $_SESSION["go"] = $go = $start->getReport();

//        $count[] = $go;
//        $GLOBAL["go"] = $go;

//         $go;

        break;
}
//var_dump($count);




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curios</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<h2><li><a href="/?city=Riga">Rīga</a></li></h2>
    <br>
   <h2><li><a href="/?city=Vilnius">Vilnius</a></li></h2>
    <br>
<h2><li><a href="/?city=Tallinn">Tallinn</a></li></h2>
    <br>
    <form action="index.php" method="get">
        <div class="top">

        </div>
        <div class="row">
        <h1>Enter city <input type="text" name="city"></h1>
        </div>

</body>
</html>

