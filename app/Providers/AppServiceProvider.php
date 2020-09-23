<?php

namespace App\Providers;

use App\Anons;
use App\Category;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\User;
use function Composer\Autoload\includeFile;

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

        if (auth()->check() && auth()->user()->hasRole('admin')) {

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
                $event->menu->add([
                    'key'   => 'catalog',
                    'text'  => 'Каталог',
                    'label' => 1,
                    'label_color' => 'light',
                    'icon'  => 'far fa-fw fa-user',

                    'url'   => '#',
                    'submenu' => [
                        [
                            'key' => 'brands',
                            'text' => 'Бренды',
                            'label' => 1,
                            'label_color' => 'light',
                            'url'   => '/admin/brand',
                        ],

                    ]

                ]);

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


        }else {
            $anons = Anons::with('orders', 'user')->where('user_id', 2)->get();
            $arrOrder = [];
            $arrNew = [];
            $arrProccess = [];
            $arrToSend = [];
            $arrComplete = [];
            $arrCanceled = [];
            foreach ($anons as $orders) {
                foreach ($orders->orders as $order) {
//                    dd($orders->orders);
                    array_push($arrOrder, $order);
                    if($order->status_id == 1) {
                        array_push($arrNew, $order);
                    }
                    if($order->status_id == 2) {
                        array_push($arrProccess, $order);
                    }
                    if($order->status_id == 3) {
                        array_push($arrComplete, $order);
                    }
                    if($order->status_id == 4) {
                        array_push($arrToSend, $order);
                    }
                    if($order->status_id == 5) {
                        array_push($arrCanceled, $order);
                    }

                }
            }



                $event->menu->add([
                    'key'   => 'orders',
                    'text'  => 'Заказы',


                    'icon'  => 'far fa-fw fa-user',

                    'url'   => 'organizer/order/all',
                    'submenu' => [
                        [
                            'key' => 'allOrder',
                            'text' => 'Все заказы',
                            'label' => count($arrOrder),
                            'label_color' => 'light',
                            'url'   => 'organizer/order/all',
                        ],
                        [
                            'key' => 'newOrder',
                            'text' => 'Новые',
                            'label' => count($arrNew),
                            'label_color' => 'light',
                            'url'   => 'organizer/order/1',
                        ],
                        [
                            'key' => 'processOrder',
                            'text' => 'В процессе',
                            'label' => count($arrProccess),
                            'label_color' => 'light',
                            'url'   => 'organizer/order/2',
                        ],
                        [
                            'key' => 'toSendOrder',
                            'text' => 'На отправку',
                            'label' => count($arrToSend),
                            'label_color' => 'light',
                            'url'   => 'organizer/order/4',
                        ],
                        [
                            'key' => 'completeOrder',
                            'text' => 'Завершенные',
                            'label' => count($arrComplete),
                            'label_color' => 'light',
                            'url'   => 'organizer/order/3',
                        ],
                        [
                            'key' => 'canceledOrder',
                            'text' => 'Отмененные',
                            'label' => count($arrCanceled),
                            'label_color' => 'light',
                            'url'   => 'organizer/order/5',
                        ],



                    ]

                ]);
                $event->menu->add([
                    'key'   => 'anons',
                    'text'  => 'Анонсы',
                    'icon'  => 'far fa-fw fa-user',
                    'url'   => '/organizer/anons/',
                ]);
                $event->menu->add([
                    'key'   => 'brand',
                    'text'  => 'Добавить бренд',
                    'icon'  => 'far fa-fw fa-plus',
                    'url'   => '/organizer/brand/add',
                ]);
                $event->menu->add([
                    'key'   => 'purchases',
                    'text'  => 'Мои выкупы',
                    'icon'  => 'far fa-fw fa-plus',
                    'url'   => '/organizer/purchases',
                ]);
                $event->menu->add([
                    'key'   => 'client',
                    'text'  => 'Мои клиенты',
                    'icon'  => 'far fa-fw fa-plus',
                    'url'   => '/organizer/client',
                ]);

            }
        });
    }
}
