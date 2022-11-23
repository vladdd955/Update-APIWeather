<?php


namespace App;


use stdClass;


class APIClient
{

    private stdClass $report;


    public function __construct(string $city)
    {
        $apiKey = "64694d11a8271d21e955af6aa1137a8b";

        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

        return $this->report = json_decode(file_get_contents($apiUrl, true));
    }

    public function getReport(): stdClass
    {
        return $this->report;
    }
}

