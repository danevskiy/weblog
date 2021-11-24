<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use App\Models\Category;

class CategoryRepository extends ModuleRepository
{
    use HandleTranslations, HandleSlugs;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }
}
