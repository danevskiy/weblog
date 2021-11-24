<?php

return [
    'menus' => [
        'title' => 'Меню',
        'module' => true
    ],
    
    'pages' => [
        'title' => 'Сторінки',
        'route' => 'admin.pages.posts.index',
        'primary_navigation' => [
            'posts' => [
                'title' => 'Публикації',
                'module' => true
            ],
            'categories' => [
                'title' => 'Категорії',
                'module' => true,
        
            ],
        ]
        ],
        'mainBlocks' => [
            'title' => 'Головні блоки',
            'route' => 'admin.mainBlocks.numbers.index',
            'primary_navigation' => [
                'numbers' => [
                    'title' => 'Цифри',
                    'module' => true
                ],

                'statistics' => [
                    'title' => 'Статистика',
                    'module' => true
                ],
            ]
            ],    
    'settings' => [
        'title' => 'Налаштування',
        'route' => 'admin.settings',
        'params' => ['section' => 'settings'],
        'primary_navigation' => [
            'settings' => [
                'title' => 'Основні налаштування',
                'route' => 'admin.settings',
                'params' => ['section' => 'settings']
            ],
            
        ]
            ],
            'featured' => [
                'title' => 'Області для відображення',
                'route' => 'admin.featured.homepage_main_cats',
                'primary_navigation' => [
                    'home_page_slider' => [
                        'title' => 'Слайдер на головній сторінці',
                        'route' => 'admin.featured.home_page_slider',
                    ],
                    'homepage_main_cats' => [
                        'title' => 'Категорії на головній сторінці',
                        'route' => 'admin.featured.homepage_main_cats',
                    ],
                    'sidebar' => [
                        'title' => 'Бокова панель',
                        'route' => 'admin.featured.sidebar',
                    ],
                    'menu' => [
                        'title' => 'Головне Меню',
                        'route' => 'admin.featured.menu',
                    ],
                    'menuFooter' => [
                        'title' => 'Меню Футер',
                        'route' => 'admin.featured.menuFooter',
                    ]

                ],
            ],
            
            
            
            ];

