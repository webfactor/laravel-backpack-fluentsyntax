<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax;

use Illuminate\Support\ServiceProvider;
use Webfactor\Laravel\Generators\Commands\MakeBackpackCrudController;
use Webfactor\Laravel\Generators\Commands\MakeBackpackCrudModel;
use Webfactor\Laravel\Generators\Commands\MakeBackpackCrudRequest;
use Webfactor\Laravel\Generators\Commands\MakeEntity;

class FluentSyntaxServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
