<?php

namespace App\Console\Commands;

use App\Models\Book;
use Illuminate\Process\Pipe;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;

class Dataset extends Command
{
    protected $signature = 'ai:dataset';

    protected $description = 'Prepare dataset to be fine tuned';

    public function handle()
    {
        $books = Book::all('completion');

        $handle = fopen(resource_path('data/books.csv'), 'w');

        fputs($handle, 'prompt,completion' . PHP_EOL);
        $books->each(function (Book $book, int $index) use ($handle) {
            if ($book->completion == "") {
                return true;
            }

            $clean = str_replace([',', '.'], '', $book->completion);
            fputs($handle, $index . ',' . $clean . PHP_EOL);
        });

        fclose($handle);

        Process::pipe(function (Pipe $pipe) {
            $pipe->command(sprintf(
                'rm -rf %s',
                resource_path('data/books_prepared**')
            ));

            $pipe->command(sprintf(
                'openai tools fine_tunes.prepare_data -f %s -q',
                resource_path('data/books.csv')
            ));
        });

        $this->info('Dataset prepared successfully...');

        return Command::SUCCESS;
    }
}
