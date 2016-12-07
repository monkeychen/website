<?php

namespace site\Providers;

use Illuminate\Support\ServiceProvider;
use site\Menu;

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
        // load menu for navigate bar
        $menus = Menu::query()->orderBy('position', 'asc')->get();
        $topMenus = generateNavItems($menus, 'subMenus');
        view()->share('topMenus', $topMenus);
        
        // load other parameters
        $cpYear = '2015 ~ ' . date("Y");
        view()->share('cp_year', $cpYear);
    }
}
