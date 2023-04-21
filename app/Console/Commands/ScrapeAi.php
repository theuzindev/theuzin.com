<?php

namespace App\Console\Commands;

use App\Services\TxtAiFacade;
use Illuminate\Console\Command;

class ScrapeAi extends Command
{
    protected $signature = 'ai:scrape';

    protected $description = 'Scrape for the AI model';

    public function handle()
    {
        TxtAiFacade::scrape();

        $this->info('Scrapped!');

        return Command::SUCCESS;
    }
}
