<?php

namespace App\Http\Controllers;

use App\Models\CurrentWeather;
use App\Models\Hour3Weather;
use App\Models\Hour24Weather;

class DataBuilder
{
    private static function iconDictionary($icon){
        //заглушка
        return $icon;
    }

    private static function importRaw(){

        date_default_timezone_set('Europe/Samara');
        $today = date("Y-m-d H:i:s");
        // ^^ get current time

        $rawCurrent = CurrentWeather::find(CurrentWeather::max('id'));
        // ^^ get current weather from db

        $rawForecastIn3HoursStep = Hour3Weather::all();
        foreach($rawForecastIn3HoursStep as $key => $item)
            if($item->Date_Local < $today)
                unset($rawForecastIn3HoursStep[$key]);
        // ^^ get forecast from db


        $rawForecastIn24HoursStep = Hour24Weather::all();
        foreach($rawForecastIn24HoursStep as $key => $item)
            if($item->Date_Local < $today)
                unset($rawForecastIn24HoursStep[$key]);
        // ^^ get forecast from db
        $raw[] = $rawCurrent. $rawForecastIn3HoursStep. $rawForecastIn24HoursStep;
        return($raw);


    }
    public static function arrayFormatter()
    {
        $output = (object)[];
        foreach($rawForecastIn3HoursStep as $item){
            $output->carousel[] = (object)[
                'dateLocal' => $item->Date_Local,
                'air' => $item->Temperature_Air,
                'icon' => $item->Icon,
            ];
        }
        $output->currentWeather = (object)[
            'air' => $rawCurrent->Temperature_Air,
            'comfort' => $rawCurrent->Temperature_Comfort,
            'description' => $rawCurrent->Description,
            'icon' => DataBuilder::iconDictionary($rawCurrent->Icon),
            'wind' =>$rawCurrent->Wind_Speed,
            'scale_8' =>$rawCurrent->Wind_Scale_8,
            'humidity' =>$rawCurrent->Humidity,
            'pressure' =>$rawCurrent->Pressure,
        ];

    }
}
