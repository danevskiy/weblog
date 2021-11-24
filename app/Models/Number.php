<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Number extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'position',
        'real_title',
        'price_title',
        'price_title_prefix',
        'price_title_info',
        'bl1_numb',
        'bl1_text',
        'bl1_pos',
        'bl2_numb',
        'bl2_text',
        'bl2_pos',
        'bl3_numb',
        'bl3_text',
        'bl3_pos',
        'bl4_numb',
        'bl4_text',
        'bl4_pos',
        'bl5_numb',
        'bl5_text',
        'bl5_pos'
    ];
    
    public $translatedAttributes = [
        'title',
        'active',
        'real_title',
        'price_title',
        'price_title_prefix',
        'price_title_info',
        'bl1_numb',
        'bl1_text',
        'bl2_numb',
        'bl2_text',
        'bl3_numb',
        'bl3_text',
        'bl4_numb',
        'bl4_text',
        'bl5_numb',
        'bl5_text',
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 5,
                ],
            ],
        ],
    ];
}
