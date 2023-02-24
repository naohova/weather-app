<?php

namespace App\Console\Commands;

use App\Http\Controllers\WeatherController;
use Illuminate\Console\Command;

class ImportCurrentWeatherCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:current';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Call Gismeteo to get current weather and save it';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        WeatherController::saveCurrentWeather();
    }
}
