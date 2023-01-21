<?php


namespace App\Components;
use GuzzleHttp\Client;



class Import24HourWeatherDataClient
{
    public $client;

    public function __construct()
    {
        $headers = ['X-Gismeteo-Token' => config('services.GisMeteo.token')];
        $this->client = new Client([

            'headers' => $headers,
            'base_uri' => 'https://api.gismeteo.net/v2/weather/forecast/aggregate/233695/?lang=en&days=10',
            'verify' => false,
        ]);
    }

    public function GetJson()
    {
        return json_decode($this->client->request('GET')->getBody()->getContents());
    }
}
