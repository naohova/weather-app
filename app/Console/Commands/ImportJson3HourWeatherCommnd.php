<?php

namespace App\Console\Commands;

use App\Http\Controllers\ApiController;
use Illuminate\Console\Command;

class ImportJson3HourWeatherCommnd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:Gismeteo3hour';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get next 10 days weather with 3 hour step from GisMeteo';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ApiController::Send3HourWeather();
    }
}
