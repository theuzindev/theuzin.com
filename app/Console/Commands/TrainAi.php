<?php

namespace App\Console\Commands;

use App\Services\TxtAiFacade;
use Illuminate\Console\Command;

class TrainAi extends Command
{
    protected $signature = 'ai:train';

    protected $description = 'Train the AI model';

    public function handle()
    {
        TxtAiFacade::train();

        $this->info('Done indexing!');

        return Command::SUCCESS;
    }
}
