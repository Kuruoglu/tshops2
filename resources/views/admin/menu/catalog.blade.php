
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
