<?php

namespace App\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class TxtAiService
{
    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::baseUrl('http://localhost:8000');
    }

    public function ask(string $question): mixed
    {
        $response = $this->api
            ->timeout(300)
            ->post('ask', [
                'question' => $question,
            ]);

        return $response->json();
    }

    public function scrape(): mixed
    {
        $response = $this->api
            ->timeout(300)
            ->acceptJson()
            ->get('scrape');

        return $response->json();
    }

    public function train(): mixed
    {
        $response = $this->api
            ->timeout(300)
            ->acceptJson()
            ->get('train');

        return $response->json();
    }
}
