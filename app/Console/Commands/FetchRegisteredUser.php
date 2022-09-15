<?php

namespace App\Console\Commands;

use App\Mail\SendRegisteredUserMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class FetchRegisteredUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will fetch todays registered users and send mail to admin';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::whereDate('created_at', '=', Carbon::today()->toDateString())->get()->toArray();
        if (!empty($user)){
            Mail::to('saurabh.dave@fooddudesdelivery.com')
                ->cc('jjain@fooddudesdelivery.com')
                ->send(new SendRegisteredUserMail($user));
        }else{
            echo  'No user registered today.';
        }

    }
}
