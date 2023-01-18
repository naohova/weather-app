<?php

namespace App\Console\Commands;

use App\Components\ImportCurrentWeatherDataClient;
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
        $import = new ImportCurrentWeatherDataClient();
        $response = $import->client->request('GET');
        dd(json_decode($response->getBody()->getContents()));
    }
}
