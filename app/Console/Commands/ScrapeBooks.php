<?php

namespace App\Console\Commands;

use App\Models\Book;
use App\Support\HasClient;
use Illuminate\Console\Command;
use PHPHtmlParser\Dom;
use PHPHtmlParser\Dom\HtmlNode;

class ScrapeBooks extends Command
{
    use HasClient;

    protected $signature = 'ai:scrape-books';

    protected $description = 'Scrape raiam books';

    public function handle()
    {
        $response = $this->client()->get('livros-raiam-santos');
        $htmlContent = (string) $response->getBody();

        $dom = new Dom;
        $dom->load($htmlContent);

        $dom->find('p.elementor-heading-title.elementor-size-default')
            ->each(function (HtmlNode $node) {
                Book::query()->firstOrCreate(['content' => $node->text]);
            });
    }
}
