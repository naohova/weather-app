<?php

namespace App\Http\Controllers;

use App\Models\CurrentWeather;
use Illuminate\Http\Request;
use App\Components\ImportCurrentWeatherDataClient;

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
            // 'phenominon' => '',
            'icon' => $data->response->icon,
            'gm' => $data->response->gm,
            'windScale_8' => $data->response->wind->direction->scale_8,
            'windDegree' => $data->response->wind->direction->degree,
            'windSpeed' => $data->response->wind->speed->m_s,
        ]);

    }

    public function Send3HourWeather()
    {

    }
    public function Send24HourWeather()
    {

    }
}


