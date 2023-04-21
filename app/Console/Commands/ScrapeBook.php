<?php

namespace App\Console\Commands;

use Smalot\PdfParser\Parser;
use App\Models\Book;
use App\Support\HasClient;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;

class ScrapeBook extends Command
{
    use HasClient;

    protected $signature = 'ai:scrape-book';

    protected $description = 'Scrape Hackeado Tudo';

    public function handle()
    {
        $pdfParser = new Parser;
        $pdf = $pdfParser->parseFile(resource_path('data/hackeando_tudo.pdf'));

        $text = $pdf->getText();

        $completions = explode("\n", str_replace("\t", '', $text));

        foreach ($completions as $completion) {
            Book::query()->create([
                'completion' => trim($completion)
            ]);
        }

        $this->info('Scrapped and saved to database...');

        return Command::SUCCESS;
    }
}
