<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Nwidart\Modules\Facades\Module;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $module=Module::allEnabled();
    $moduleall=Module::allDisabled();
        view()->share(['module'=>$module,'moduleall'=>$moduleall]);
        //
    }
}
