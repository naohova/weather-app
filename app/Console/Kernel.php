<?php

namespace App\Console;

use App\Http\Controllers\ApiController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        $schedule->call(function () {
            ApiController::SendCurrentWeather();
         })->hourlyAt(00);

        $schedule->call(function () {
            ApiController::Send24HourWeather();
        })->cron('0 4,12,20 * * *');

        $schedule->call(function () {
            ApiController::Send3HourWeather();
        })->cron('0 4,12,20 * * *');
        // $schedule->command('import:GismeteoCurrent')->hourlyAt(00);
        // $schedule->command('import:Gismeteo3hour')->cron('0 4,12,20 * * *');
        // $schedule->command('import:Gismeteo:24hour')->cron('0 4,12,20 * * *');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
