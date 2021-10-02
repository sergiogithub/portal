<?php

namespace App\Console;

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
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('application:no-show')->everyThirtyMinutes();
        $schedule->command('application:send-interview-reminders')->dailyAt('08:00');
        $schedule->command('sync:effortsheet')->weekdays()->timezone(config('constants.timezone.indian'))->at('22:00');
        $schedule->command('hr:check-follow-ups')->daily();
        $schedule->command('mapping-of-jobs-and-hr-rounds');
        $schedule->command('invoice:send-unpaid-invoice-list')->weekly()->mondays()->at('09:00');
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
