<?php

namespace site\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setGlobalViewParameters();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
    private function setGlobalViewParameters() {
        $cpYear = '2015 ~ ' . date("Y");
        view()->share('cp_year', $cpYear);
    }
}
