<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Menu;
use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Repositories\Behaviors\HandleTags;
use A17\Twill\Models\Model;


class Post extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition, HandleTags;


    

    protected $fillable = [
        'published',
        'title',
        'cover',
        'position',
        'cat_id',
        'created_at'
    
    ];
    
    public $translatedAttributes = [
        'title',
        'active',
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 196 / 132,
                ],
            ],

        ],
    ];




    public function categories()
    {
        return $this->belongsTo(Category::class);
    }







}
