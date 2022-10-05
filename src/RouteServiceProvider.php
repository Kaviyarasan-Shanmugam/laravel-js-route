<?php

namespace ProcessDrive\LaravelJsRoute;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__, 'LaravelJsRoute');
    }
}
