<?php

namespace App\Console\Commands;

use App\Components\Import3HourWeatherDataClient;
use Illuminate\Console\Command;
use Monolog\Formatter\JsonFormatter;

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
        $import = new Import3HourWeatherDataClient();
        $response = $import->client->request('GET');
        dd(json_decode($response->getBody()->getContents()));

    }
}
