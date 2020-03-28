<?php

namespace Yoyou\YJunit\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class YJunitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'yjunit'
        );
    }

    public function boot()
    {
        
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Yoyou\YJunit\Http\Controllers',
            'prefix' => 'yjunit',
            'middleware' => 'web',
        ];
    }
}