<?php

namespace SenorWesley\ModelLogger\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use SenorWesley\ModelLogger\Models\Log;

class CleanLogsCommand extends Command
{
    protected $name = 'modellog:clean';
    protected $description = 'Deletes old records from the model log.';

    public function handle()
    {
        $this->info('Give me a sec fam');
        $amount = Log::where('created_at', '<=', Carbon::now()->subDay(7))->delete();
        $this->info("Deleted {$amount} of logs. Start cleaning up your own trash rudeboy.");
    }
}