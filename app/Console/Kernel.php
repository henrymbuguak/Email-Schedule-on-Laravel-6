<?php

namespace App\Console;

use App\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;
use PDF;

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
        $schedule->call(function (){
            $users = User::orderBy('created_at', 'ASC')->get();

            foreach ($users as $user) {

                $sales_report = PDF::loadView('reports.sale_report', ['user' => $user]);
                $pdf = $sales_report->output();
                $data = [
                    'details' => 'This email is to notify you of this week sales and challenges we are facing as Sales department',
                    'manager_name' => $user->name
                ];

                Mail::send('reports.email_body', $data, function ($message) use ($user, $pdf) {
                   $message->subject('HLAB Weekl Sales Report');
                   $message->from('henrymbuguak@gmail.com');
                   $message->to($user->email);
                   $message->attachData($pdf, 'sales.pdf', [
                       'mime' => 'application/pdf',
                   ]);
                });


            }



        });
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
