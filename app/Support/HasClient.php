<?php

namespace App\Support;

use Illuminate\Support\Facades\Http;

trait HasClient
{
    public function client()
    {
        return Http::baseUrl('https://mundoraiam.com');
    }
}
