<?php

namespace App\Http\Controllers;

use App\Models\CurrentWeather;
use App\Models\Hour3Weather;

class WeatherController
{
    public static function dataBuilder()
    {
        date_default_timezone_set('Europe/Samara');

        $today = date("Y-m-d H:i:s");
        //take current
        $current = CurrentWeather::find(CurrentWeather::max('id'));
        $forecast = Hour3Weather::all()->where('created_at', '>', ($today));
        var_dump($today);
        dump($current);
        dump(json_decode($by3Step));
    }
}
