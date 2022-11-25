<?php


namespace App\Controllers;


use App\APIClient;
use App\Models\Report;


class ApiController
{
   private APIClient $startApi;



    public function __construct($city)
    {
       $this->startApi = new APIClient($city);
       return $this->getReport();
    }

    public function getReport(): array
    {

        $startReportClass = new Report($this->startApi->report);
        return [
                $startReportClass->getName(),
                $startReportClass->getTemp(),
                $startReportClass->getFeel(),
                $startReportClass->getWind(),
                $startReportClass->getIcon()
        ];


    }

}
