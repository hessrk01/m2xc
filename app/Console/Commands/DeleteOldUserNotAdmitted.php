<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Carbon\Carbon;

class DeleteOldUserNotAdmitted extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'm2xc:dltnonusers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete all users that have a FALSE admitted status';

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
     * @return mixed
     */
    public function handle()
    {
        $numberDeleted = User::whereDate('created_at', '<', Carbon::now()->subDays(7))
                        ->where('admitted', '=', '0')
                        ->where('past_login_success', '=', '0')
                        ->delete();
        echo "$numberDeleted user records NOT admitted older than 7 days were deleted.\n";
    }
}
