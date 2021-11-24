<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;
use App\Repositories\CategoryRepository;
use App\Repositories\MenuRepository;
class PostController extends ModuleController
{

   
    protected $moduleName = 'posts';



    protected $formWith = [
        'categories',
    ];

    /*
     * Add anything you would like to have available in your module's form view
     * For example, relationship lists for multiselect form fields
     */
    protected function formData($request)
    {
        return [
            'categories' => app(CategoryRepository::class)->listAll(),
        ];
    }
    
}
