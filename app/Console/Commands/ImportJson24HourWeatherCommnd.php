<?php

namespace App\Console\Commands;

use App\Components\Import24HourWeatherDataClient;
use Illuminate\Console\Command;

class ImportJson24HourWeatherCommnd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:Gismeteo24hour';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get next 10 days weather with 24 hour step from GisMeteo';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $import = new Import24HourWeatherDataClient();
        $response = $import->client->request('GET');
        dd(json_decode($response->getBody()->getContents()));
    }
}
