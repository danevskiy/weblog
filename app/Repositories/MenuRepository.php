<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Menu;

class MenuRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleMedias, HandleFiles;

    public function __construct(Menu $model)
    {
        $this->model = $model;
    }
}
