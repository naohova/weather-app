<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\CurrentWeather;
use App\Models\Hour3Weather;
use App\Models\Hour24Weather;

use App\Components\ImportCurrentWeatherDataClient;
use App\Components\Import3HourWeatherDataClient;
use App\Components\Import24HourWeatherDataClient;

class ApiController extends Controller
{
    public function SendCurrentWeather()
    {
        $client = new ImportCurrentWeatherDataClient();

        $data = $client->GetJson();
        CurrentWeather::create([
            'kind' => $data->response->kind,
            'dateUnix' => $data->response->date->unix,
            'temperatureAir' => $data->response->temperature->air->C,
            'temperatureComfort' => $data->response->temperature->comfort->C,
            'temperatureWater' => $data->response->temperature->water->C,
            'description' => $data->response->description->full,
            'humidity' => $data->response->humidity->percent,
            'pressure' => $data->response->pressure->mm_hg_atm,
            'cloudinessPercent' => $data->response->cloudiness->percent,
            'cloudinessType' => $data->response->cloudiness->type,
            'storm' => $data->response->storm,
            'precipitationType' => $data->response->precipitation->type_ext,
            'precipitationAmount' => $data->response->precipitation->amount,
            'precipitationIntensity' => $data->response->precipitation->intensity,
            'icon' => $data->response->icon,
            'gm' => $data->response->gm,
            'windScale_8' => $data->response->wind->direction->scale_8,
            'windDegree' => $data->response->wind->direction->degree,
            'windSpeed' => $data->response->wind->speed->m_s,
        ]);

    }

    public function Send3HourWeather()
    {
        $client = new Import3HourWeatherDataClient();
        $collection = $client->GetJson();
        foreach ($collection->response as $data)
        {
            Hour3Weather::create([
                'kind' => $data->kind,
                'dateUnix' => $data->date->unix,
                'temperatureAir' => $data->temperature->air->C,
                'temperatureComfort' => $data->temperature->comfort->C,
                'temperatureWater' => $data->temperature->water->C,
                'description' => $data->description->full,
                'humidity' => $data->humidity->percent,
                'pressure' => $data->pressure->mm_hg_atm,
                'cloudinessPercent' => $data->cloudiness->percent,
                'cloudinessType' => $data->cloudiness->type,
                'storm' => $data->storm,
                'precipitationType' => $data->precipitation->type_ext,
                'precipitationAmount' => $data->precipitation->amount,
                'precipitationIntensity' => $data->precipitation->intensity,
                'icon' => $data->icon,
                'gm' => $data->gm,
                'windScale_8' => $data->wind->direction->scale_8,
                'windDegree' => $data->wind->direction->degree,
                'windSpeed' => $data->wind->speed->m_s,
            ]);
        }

    }
    public function Send24HourWeather()
    {

    }
}


