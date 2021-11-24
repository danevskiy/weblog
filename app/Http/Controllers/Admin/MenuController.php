<?php

namespace App\Http\Controllers\Admin;
use A17\Twill\Http\Controllers\Admin\ModuleController;
use App\Repositories\MenuRepository;
use App\Repositories\PostRepository;
class MenuController extends ModuleController
{
    protected $moduleName = 'menus';
    

    protected $formWith = [
        'menus',
        'posts'
    ];

    /*
     * Add anything you would like to have available in your module's form view
     * For example, relationship lists for multiselect form fields
     */
    protected function formData($request)
    {
        return [
            'menus' => app(MenuRepository::class)->listAll(),
            'posts' => app(PostRepository::class)->listAll(),
        ];
    }



}
