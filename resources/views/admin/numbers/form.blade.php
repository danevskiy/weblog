@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Заголовок',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'real_title',
        'label' => 'Заголовок роботи',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'price_title',
        'label' => 'Кількість',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'price_title_prefix',
        'label' => 'Приставка до кількості',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'price_title_info',
        'label' => 'Заголовок стосновно кількості',
        'translated' => true,
        'maxlength' => 100
    ])
    
    @formField('input', [
        'name' => 'bl1_numb',
        'label' => 'Кількість в сегменті 1',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'bl1_text',
        'label' => 'Заголовок в сегменті 1',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('select', [
    'name' => 'bl1_pos',
    'label' => 'Відображати блок зверху чи знизу',
    'placeholder' => 'Оберіть позицію',
    'options' => [
        [
            'value' => 1,
            'label' => 'Зверху'
        ],
        [
            'value' => 2,
            'label' => 'Знизу'
        ],
        
    ]
])

    @formField('input', [
        'name' => 'bl2_numb',
        'label' => 'Кількість в сегменті 2',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'bl2_text',
        'label' => 'Заголовок в сегменті 2',
        'translated' => true,
        'maxlength' => 100
    ])


    @formField('select', [
    'name' => 'bl2_pos',
    'label' => 'Відображати блок зверху чи знизу',
    'placeholder' => 'Оберіть позицію',
    'options' => [
        [
            'value' => 1,
            'label' => 'Зверху'
        ],
        [
            'value' => 2,
            'label' => 'Знизу'
        ],
        
    ]
])

    @formField('input', [
        'name' => 'bl3_numb',
        'label' => 'Кількість в сегменті 3',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'bl3_text',
        'label' => 'Заголовок в сегменті 3',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('select', [
    'name' => 'bl3_pos',
    'label' => 'Відображати блок зверху чи знизу',
    'placeholder' => 'Оберіть позицію',
    'options' => [
        [
            'value' => 1,
            'label' => 'Зверху'
        ],
        [
            'value' => 2,
            'label' => 'Знизу'
        ],
        
    ]
])


    @formField('input', [
        'name' => 'bl4_numb',
        'label' => 'Кількість в сегменті 4',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'bl4_text',
        'label' => 'Заголовок в сегменті 4',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('select', [
    'name' => 'bl4_pos',
    'label' => 'Відображати блок зверху чи знизу',
    'placeholder' => 'Оберіть позицію',
    'options' => [
        [
            'value' => 1,
            'label' => 'Зверху'
        ],
        [
            'value' => 2,
            'label' => 'Знизу'
        ],
        
    ]
])



    @formField('input', [
        'name' => 'bl5_numb',
        'label' => 'Кількість в сегменті 5',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'bl5_text',
        'label' => 'Заголовок в сегменті 5',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('select', [
    'name' => 'bl5_pos',
    'label' => 'Відображати блок зверху чи знизу',
    'placeholder' => 'Оберіть позицію',
    'options' => [
        [
            'value' => 1,
            'label' => 'Зверху'
        ],
        [
            'value' => 2,
            'label' => 'Знизу'
        ],
        
    ]
])

    

   
@stop
