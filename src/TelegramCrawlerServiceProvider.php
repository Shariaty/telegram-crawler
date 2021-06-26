<?php
namespace Shariaty\TelegramCrawler;

use Illuminate\Support\ServiceProvider;

class  TelegramCrawlerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('telegram.php'),
            ], 'config');

        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'telegram');

        $this->app->bind('telegram', function($app) {
            return new TelegramCrawler();
        });
    }
}
