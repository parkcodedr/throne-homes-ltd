<?php

namespace App\Console;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    // protected function schedule(Schedule $schedule)
    // {
    //     // $schedule->command('inspire')
    //     //          ->hourly();
    // }


    protected function schedule(Schedule $schedule)
    {

        $schedule->call('App\Http\Controllers\DaomniProjectsController@landGrowth')
            ->daily()->when(function () {
                $valid = false;
                $valid_date = DB::table('growth_valid_date')->value('valid_date');
                $today_date = date('Y-m-d');
                $valid = $today_date <= $valid_date ? true : false;
                return $valid;
            });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
