<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Services\Sage\SagePay;
use \Services\Sage\SagepayFormApi as SageApi;
use \Services\Sage\SagepaySettings;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public $result;
    public function boot()
    {
        //view()->share($this->result);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
