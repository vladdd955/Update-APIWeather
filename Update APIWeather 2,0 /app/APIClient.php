<?php


namespace App;


use stdClass;


class APIClient
{

    public stdClass $report;


    public function __construct(string $city)
    {
        $apiKey = "64694d11a8271d21e955af6aa1137a8b";
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";
         $this->report = json_decode(file_get_contents($apiUrl, true));
        return $this->report;
    }

}

