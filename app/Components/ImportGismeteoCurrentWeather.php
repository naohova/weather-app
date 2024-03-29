<?php


namespace App\Components;
use GuzzleHttp\Client;



class ImportGismeteoCurrentWeather
{
    public $client;

    public function __construct()
    {
        $headers = ['X-Gismeteo-Token' => config('services.GisMeteo.token')];
        $this->client = new Client([
            'headers' => $headers,
            //233695 ul архангельское
            'base_uri' => 'https://api.gismeteo.net/v2/weather/current/233695/?lang=en',
            'verify' => false,

        ]);
    }
    public function GetJson()
    {
        return json_decode($this->client->request('GET')->getBody()->getContents());
    }
}
