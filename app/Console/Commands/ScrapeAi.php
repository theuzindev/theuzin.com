<?php

namespace App\Console\Commands;

use App\Models\Book;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use PHPHtmlParser\Dom;
use PHPHtmlParser\Dom\HtmlNode;

class ScrapeAi extends Command
{
    protected $signature = 'ai:scrape';

    protected $description = 'Scrape for the AI model';

    public function handle()
    {
        $url = 'https://mundoraiam.com/livros-raiam-santos';

        $response = (new Client)->get($url);
        $htmlContent = (string) $response->getBody();

        $dom = new Dom;
        $dom->load($htmlContent);

        $dom->find('p.elementor-heading-title.elementor-size-default')
            ->each(function (HtmlNode $node) {
                Book::query()->firstOrCreate(['content' => $node->text]);
            });
    }
}
