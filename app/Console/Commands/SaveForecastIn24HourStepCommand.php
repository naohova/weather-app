<?php

namespace App\Console\Commands;

use App\Http\Controllers\WeatherController;
use Illuminate\Console\Command;

class SaveForecastIn24HourStepCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:forecast24';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Call Gismeteo to get forecast and save it';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        WeatherController::saveFotecastIn24HourStep();
    }
}
