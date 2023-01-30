<?php

namespace App\Console\Commands;

use App\Components\ImportCurrentWeatherDataClient;
use App\Http\Controllers\ApiController;
use Illuminate\Console\Command;

class InportJsonCurrentWeatherCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:GismeteoCurrent';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get current weather data from gismeteo';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ApiController::SendCurrentWeather();
    }
}
