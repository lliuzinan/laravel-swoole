<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class croSelf extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string-test
     */
    protected $signature = 'mysql-crontab';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        Log::debug("[lzn]-runtime".date("H:i"));
        return 0;
    }
}
