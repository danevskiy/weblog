<?php

return [
    'enabled' => [
    'settings' => true,
    'buckets' => true,
    ],
    'buckets' => [
        'home_page_slider' => [
            'name' => 'Home page slider',
            'buckets' => [
                'home_primary_feature9' => [
                    'name' => 'Слайдер',
                    'bucketables' => [
                        [
                            'module' => 'posts',
                            'name' => 'Posts',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 50,
                ],

            ],
        ],
        'homepage_main_cats' => [
            'name' => 'Home page main cats',
            'buckets' => [
                'home_primary_feature_cats' => [
                    'name' => 'Категории на главной',
                    'bucketables' => [
                        [
                            'module' => 'category',
                            'name' => 'Categories',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 3,
                ],

            ],
            
        ],
        'sidebar' => [
            'name' => 'sidebar',
            'buckets' => [
                'home_primary_feature_cats_sidebar' => [
                    'name' => 'Оголошення',
                    'bucketables' => [
                        [
                            'module' => 'posts',
                            'name' => 'Posts',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 111,
                ],
                'home_primary_feature_cats_sidebar2' => [
                    'name' => 'Відео',
                    'bucketables' => [
                        [
                            'module' => 'posts',
                            'name' => 'Posts',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 111,
                ],
                'home_primary_feature_cats_sidebar3' => [
                    'name' => 'Регіональні новини',
                    'bucketables' => [
                        [
                            'module' => 'posts',
                            'name' => 'Posts',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 111,
                ]

            ],
            
        ],

        'menu' => [
            'name' => 'menu',
            'buckets' => [
                'menu11' => [
                    'name' => 'Головне меню',
                    'bucketables' => [
                        [
                            'module' => 'menus',
                            'name' => 'Menu',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 111,
                ],


            ],
            
        ],
        'menuFooter' => [
            'name' => 'menuFooter',
            'buckets' => [
                'menu_footer1' => [
                    'name' => 'Розділ "Прокуратура"',
                    'bucketables' => [
                        [
                            'module' => 'menus',
                            'name' => 'Menu',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 111,
                ],
                'menu_footer2' => [
                    'name' => 'Розділ "Прес-центр"',
                    'bucketables' => [
                        [
                            'module' => 'menus',
                            'name' => 'Menu',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 111,
                ],
                'menu_footer3' => [
                    'name' => 'Розділ "Звернутися"',
                    'bucketables' => [
                        [
                            'module' => 'menus',
                            'name' => 'Menu',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 111,
                ],
                'menu_footer4' => [
                    'name' => 'Розділ "Законодавство"',
                    'bucketables' => [
                        [
                            'module' => 'menus',
                            'name' => 'Menu',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 111,
                ],
                'menu_footer5' => [
                    'name' => 'Розділ "Сайти обласних прокуратур"',
                    'bucketables' => [
                        [
                            'module' => 'menus',
                            'name' => 'Menu',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 111,
                ],
                'menu_footer6' => [
                    'name' => 'Розділ "Працівникам прокуратури"',
                    'bucketables' => [
                        [
                            'module' => 'menus',
                            'name' => 'Menu',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 111,
                ]



            ],
            
        ],
        


    ],
    'media_library' => [
        'disk' => 'twill_media_library',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Local'),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'prefix_uuid_with_local_path' => config('twill.file_library.prefix_uuid_with_local_path', false),
        'translated_form_fields' => false,
    ],
    'block_editor' => [
        'block_single_layout' => 'site.layouts.block',
        'block_views_path' => 'site.blocks',
        'block_views_mappings' => [],
        'block_preview_render_childs' => true,
        'crops' => [
            'image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 1,
                    ],
                ],
            ],
            'logo' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                
                ],
                'logoScroll' => [
                    'Standart size' => [
                        [
                            'name' => 'desktop',
                            'ratio' => 1,
                            'minValues' => [
                                'width' => 100,
                                'height' => 100,
                            ],
                        ],
                    ],
                    
                ],

                'cover' => [
                    'default' => [
                        [
                            'name' => 'default',
                            'ratio' => 1,
                        ],
                    ],
    
                ],

                
            ],
       
    ],
];
