<?php

namespace App\Console\Commands;

use App\Http\Controllers\ApiController;
use Illuminate\Console\Command;

class ImportForecastCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:forecast';

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
        ApiController::ImportForecast();
    }
}
