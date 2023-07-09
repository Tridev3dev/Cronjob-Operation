<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    
    public function handle(): void
    {
        //
        \Log::info("Cron is running!");
        DB::table('address')->insert(['user_id'=> '3','country'=> 'Odisha']);
    }
}
