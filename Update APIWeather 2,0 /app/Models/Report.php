<?php


namespace App\Models;

use stdClass;


class Report

{
    private  stdClass $report;

    public function __construct(stdClass $report)
    {
            return $this->report = $report;
    }

    public function getIcon(): string
    {
        return $this->report->weather[0]->icon;
    }

    public function getName(): string
    {
        return $this->report->name;
    }

    public function getTemp(): float
    {
        return $this->report->main->temp;
    }

    public function getFeel(): float
    {
        return $this->report->main->feels_like;
    }

    public function getWind(): float
    {
        return $this->report->wind->speed;
    }
}

