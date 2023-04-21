<?php

namespace App\Services;

use App\Services\TxtAiService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array ask(string $question)
 * @method static array train()
 * @method static array scrape()
 */
class TxtAiFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return TxtAiService::class;
    }
}
