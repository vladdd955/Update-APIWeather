<?php

require_once "vendor/autoload.php";


use App\Report;
use App\APIClient;
use Carbon\Carbon;



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heyyy!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2><li><a href="/?city=Riga">Riga</a></li></h2>
    <br>
   <h2><li><a href="/?city=Vilnius">Vilnius</a></li></h2>
    <br>
<h2><li><a href="/?city=Tallinn">Tallinn</a></li></h2>
    <br>
    <form action="index.php" method="get">
        <div class="top">
        <?php
        $tomorrow = Carbon::now();

        $city = $_GET['city'] ?? "Riga";
        $emptyClass = new APIClient($city);

        $weatherData = new Report($emptyClass->getReport());

        echo "<h1>City:  {$weatherData->getName()}<br>  Temperature:  {$weatherData->getTemp()} <br>  Feel like:  {$weatherData->getFeel()} <br>  Wind speed:  {$weatherData->getWind()} m/s <br> {$tomorrow}</h1>";
        echo "<img src='http://openweathermap.org/img/w/" . $weatherData->getIcon() . ".png'>";
        ?>
        </div>
        <div class="row">
        <h1>Enter city <input type="text" name="city"></h1>
        </div>



</body>
</html>

