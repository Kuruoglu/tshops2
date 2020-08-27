<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\User;

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
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {

            $event->menu->add([
                'key'   => 'categories',
                'text'  => 'Categories',
                'label' => Category::all()->count(),
                'icon'  => 'far fa-fw fa-file',
                'url'   => 'admin/category',
            ]);
            $event->menu->add([
                'key'   => 'users',
                'text'  => 'Users',
                'label' => 1,
                'icon'  => 'far fa-fw fa-user',
                'url'   => 'admin/user',
            ]);
        });
    }
}
