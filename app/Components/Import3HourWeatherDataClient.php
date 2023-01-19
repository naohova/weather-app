<?php

namespace App\Components;


use GuzzleHttp\Client;

class Import3HourWeatherDataClient
{
    public $client;

    public function __construct()
    {
        $headers = ['X-Gismeteo-Token' => config('services.GisMeteo.token')];
        $this->client = new Client([
            'headers' => $headers,
            'base_uri' => 'https://api.gismeteo.net/v2/weather/forecast/233695/?lang=en&days=10',
            'verify' => false,
        ]);
    }
}
