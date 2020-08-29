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
                'label_color' => 'light',
                'icon'  => 'far fa-fw fa-file',
                'url'   => 'admin/category',
            ]);
            $event->menu->add([
                'key'   => 'users',
                'text'  => 'Users',
                'label' => User::all()->count(),
                'label_color' => 'light',
                'icon'  => 'far fa-fw fa-user',
                'url'   => 'admin/user',
                //'active' => ['users', 'categories'],
            ]);
            $event->menu->add('--------------');
            $event->menu->add([
                'key'   => 'orders',
                'text'  => 'Заказы',
                'label' => 1,
                'label_color' => 'light',
                'icon'  => 'far fa-fw fa-user',

                'url'   => '#',
                'submenu' => [
                    [
                        'key' => 'allOrder',
                        'text' => 'Все заказы',
                        'label' => 1,
                        'label_color' => 'light',
                        'url'   => 'admin/order/{status}',
                    ],
                    [
                        'key' => 'newOrder',
                        'text' => 'Новые',
                        'label' => 1,
                        'label_color' => 'light',
                        'url'   => 'admin/order/{status}',
                    ],
                    [
                        'key' => 'processOrder',
                        'text' => 'В процессе',
                        'label' => 1,
                        'label_color' => 'light',
                        'url'   => 'admin/order/{status}',
                    ],
                    [
                        'key' => 'toSendOrder',
                        'text' => 'На отправку',
                        'label' => 1,
                        'label_color' => 'light',
                        'url'   => 'admin/order/{status}',
                    ],
                    [
                        'key' => 'completeOrder',
                        'text' => 'Завершенные',
                        'label' => 1,
                        'label_color' => 'light',
                        'url'   => 'admin/order/{status}',
                    ],
                    [
                        'key' => 'canceledOrder',
                        'text' => 'Отмененные',
                        'label' => 1,
                        'label_color' => 'light',
                        'url'   => 'admin/order/{status}',
                    ],



                ]

            ]);
        });
    }
}
