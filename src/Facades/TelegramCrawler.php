<?php

namespace Shariaty\TelegramCrawler\Facades;

use Illuminate\Support\Facades\Facade;

class TelegramCrawler extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'telegram';
    }
}