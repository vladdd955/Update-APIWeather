
<?php
use Carbon\Carbon;

require_once "index.php"?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
//    session_start();
//   echo  $GLOBALS["go"];
//    var_dump($_SESSION["go"])
//
//        foreach ($count as $value) {
//            echo $value;
//        }


        session_start();
            $tomorrow = Carbon::now();

            echo "<h1>City:  {$_SESSION["go"][0]}<br>  Temperature:  {$_SESSION["go"][1]} <br>  Feel like:  {$_SESSION["go"][2]} <br>  Wind speed:  {$_SESSION["go"][3]} m/s <br> {$tomorrow}</h1>";
            echo "<img src='http://openweathermap.org/img/w/" . $_SESSION["go"][4] . ".png'>";

    ;?>

</body>
</html>






















