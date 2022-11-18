<? 
    $orders = [
        'orders' =>[
            [
                'class' => 'order',
                'title' => 'Basic plan',
                'logo' => '/image/card-black.png',
                'price_month' => '$19',
                'price_year' => '$199',
                'line_class' => 'order__line',
                'li_class' => 'includes-list-item',
                'button_class' => 'order__button',
                'button_title' => 'Get started',
                'includes_class' => 'order__includes',
                'includes' => array('Vestibulum posuere odio','Id purus maximus condimentum','Vel convallis nibh duis',)
            ],
            [
                'class' => 'order order_main',
                'title' => 'Business plan',
                'logo' => '/image/card-green.png',
                'price_month' => '$29',
                'price_year' => '$299',
                'line_class' => 'order__line order__line_main',
                'li_class' => 'includes-list-item includes-list-item_main',
                'button_class' => 'order__button order__button_main',
                'button_title' => 'Get started',
                'includes_class' => 'order__includes order__includes_main',
                'includes' => array('Maximus condimentum turpis','Nullam faucibus dictum accumsan','Vivamus ante dolor','Purus in convallis pharetra')
            ],
            [
                'class' => 'order',
                'title' => 'Enterprise plan',
                'logo' => '/image/card-black.png',
                'price_month' => '$49',
                'price_year' => '$499',
                'line_class' => 'order__line',
                'li_class' => 'order__includes-marker-list-item',
                'button_class' => 'order__button',
                'button_title' => 'Get started',
                'includes_class' => 'order__includes',
                'includes' => array('Phasellus finibus lectus','At blandit mollis maecenas','Nec ultrices lectus eune','Mattis facilisis lacus aliquet','Am condimentum cursus',)
            ]
        ]
    ]
?>