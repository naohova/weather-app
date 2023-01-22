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
        // dump($data);
        CurrentWeather::create([
            'Precipitation_Intensity' => $data->response->precipitation->intensity,
            'Precipitation_Amount' => $data->response->precipitation->amount,
            'Precipitation_Type' => $data->response->precipitation->type_ext,
            'Pressure' => $data->response->pressure->mm_hg_atm,
            'Humidity' => $data->response->humidity->percent,
            'Icon' => $data->response->icon,
            'Geomagnetic_Field' => $data->response->gm,
            'Wind_Degree' => $data->response->wind->direction->degree,
            'Wind_Scale_8' => $data->response->wind->direction->scale_8,
            'Wind_Speed' => $data->response->wind->speed->m_s,
            'Cloudiness_Type' => $data->response->cloudiness->type,
            'Cloudiness_Percent' => $data->response->cloudiness->percent,
            'Date_Unix' => $data->response->date->unix,
            'Kind' => $data->response->kind,
            'Storm' => $data->response->storm,
            'Temperature_Comfort' => $data->response->temperature->comfort->C,
            'Temperature_Water' => $data->response->temperature->water->C,
            'Temperature_Air' => $data->response->temperature->air->C,
            'Description' => $data->response->description->full,
        ]);

    }

    public function Send3HourWeather()
    {
        $client = new Import3HourWeatherDataClient();
        $collection = $client->GetJson();
        foreach ($collection->response as $data)
        {
            // dump($data);
            Hour3Weather::create([
                'Precipitation_Intensity' => $data->precipitation->intensity,
                'Precipitation_Amount' => $data->precipitation->amount,
                'Precipitation_Type' => $data->precipitation->type_ext,
                'Pressure' => $data->pressure->mm_hg_atm,
                'Humidity' => $data->humidity->percent,
                'Icon' => $data->icon,
                'Geomagnetic_Field' => $data->gm,
                'Wind_Degree' => $data->wind->direction->degree,
                'Wind_Scale_8' => $data->wind->direction->scale_8,
                'Wind_Speed' => $data->wind->speed->m_s,
                'Cloudiness_Type' => $data->cloudiness->type,
                'Cloudiness_Percent' => $data->cloudiness->percent,
                'Date_Unix' => $data->date->unix,
                'Kind' => $data->kind,
                'Storm' => $data->storm,
                'Temperature_Comfort' => $data->temperature->comfort->C,
                'Temperature_Water' => $data->temperature->water->C,
                'Temperature_Air' => $data->temperature->air->C,
                'Description' => $data->description->full,
            ]);
        }

    }
    public function Send24HourWeather()
    {
        $client = new Import24HourWeatherDataClient();
        $collection = $client->GetJson();
        foreach ($collection->response as $data)
        {
            // dump($data);
            Hour24Weather::create([
                'Precipitation_Intensity' => $data->precipitation->intensity,
                'Precipitation_Amount' => $data->precipitation->amount,
                'Precipitation_Type' => $data->precipitation->type_ext,
                'Pressure_Max' => $data->pressure->mm_hg_atm->max,
                'Pressure_Min' => $data->pressure->mm_hg_atm->min,
                'Humidity_Max' => $data->humidity->percent->max,
                'Humidity_Min' => $data->humidity->percent->min,
                'Humidity_Avg' => $data->humidity->percent->avg,
                'Geomgnetic_Field' => $data->gm,
                'Description' => $data->description->full,
                'Cloudiness_Type' => $data->cloudiness->type,
                'Cloudiness_Percent' => $data->cloudiness->percent,
                'Date_Unix' => $data->date->unix,
                'Kind' => $data->kind,
                'Storm' => $data->storm,
                'Temperature_Comfort_Max' => $data->temperature->comfort->max->C,
                'Temperature_Comfort_Min' => $data->temperature->comfort->min->C,
                'Temperature_Water_Max' => $data->temperature->water->max->C,
                'Temperature_Water_Min' => $data->temperature->water->min->C,
                'Temperature_Air_Max' => $data->temperature->air->max->C,
                'Temperature_Air_Min' => $data->temperature->air->min->C,
                'Temperature_Air_Avg' => $data->temperature->air->avg->C,
                'Wind_Speed_Max' => $data->wind->speed->max->m_s,
                'Wind_Speed_Min' => $data->wind->speed->min->m_s,
                'Wind_Speed_Avg' => $data->wind->speed->avg->m_s,
                'Wind_Degree_Max' => $data->wind->direction->max->degree,
                'Wind_Scale_8_Max' => $data->wind->direction->max->scale_8,
                'Wind_Degree_Min' => $data->wind->direction->min->degree,
                'Wind_Scale_8_Min' => $data->wind->direction->min->scale_8,
                'Wind_Degree_Avg' => $data->wind->direction->avg->degree,
                'Wind_Scale_8_Avg' => $data->wind->direction->avg->scale_8,
                'Icon' => $data->icon,
            ]);
        }
    }
}


