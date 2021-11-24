<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Model;
use A17\Twill\Models\Behaviors\HasSlug;

class Category extends Model 
{
    use HasTranslation, HasSlug;

    protected $fillable = [
        'published',
        'title',
        'description',
        'text_cat'
    ];

    public $slugAttributes = [
        'title',
    ];
    
    public $translatedAttributes = [
        'title',
        'description',
        'active',
        'text_cat'
    ];
    
}
