<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Services\EmailMessageService;

class ImportEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emailify:import {files*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports emails from .msg files';

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
    public function handle(EmailMessageService $service)
    {
        $service->import($this->argument('files'));
    }
}
