<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelloLaravelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:hello';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'hello!我是飘寒';

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
        echo "hello!我是飘寒\n";
    }
}
