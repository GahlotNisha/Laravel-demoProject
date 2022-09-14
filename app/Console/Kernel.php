<?php

namespace App\Console;

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
    protected $commands = [
        Commands\FetchRegisteredUser::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        //here you can change cron time acc to requirement (hourly(),daily() etc)
        //$schedule->command('fetch:users')->daily();
        $schedule->command('fetch:users');
    }

    /**
     * Register the commands for the application.
     *php
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
