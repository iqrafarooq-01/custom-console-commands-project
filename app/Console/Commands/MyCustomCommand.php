<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class MyCustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:my-custom-command';
    protected $signature = 'logcustomcommand:my-custom-command';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //    here we have to define custom actions that we want to perform on its behalf
        Log::info('My custom command ran successfully!');

        $this->info('My custom command ran successfully!');
    }
}
