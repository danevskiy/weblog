@extends('twill::layouts.settings')

@section('contentFields')

@formField('input', [
        'name' => 'twitter',
        'label' => 'Сссылка на Twitter',
    ])
    @formField('input', [
        'name' => 'facebook',
        'label' => 'Сссылка на Facebook',
    ])
    @formField('input', [
        'name' => 'youtube',
        'label' => 'Сссылка на Youtube',
    ])
    @formField('input', [
        'name' => 'telegram',
        'label' => 'Сссылка на Telegram',
        
    ]) 

    @formField('medias', [
        'name' => 'logo',
        'label' => 'Лого',
    ])
    @formField('medias', [
        'name' => 'logoScroll',
        'label' => 'Лого при скролле',
    ])



    @formField('input', [
        'name' => 'eye',
        'label' => 'Заголовок "Режим для слабовидящих"',
        'translated' => true,
    ])
    @formField('input', [
        'name' => 'news_title',
        'label' => 'Заголовок "До всiх новин"',
        'translated' => true,
    ])
    @formField('input', [
        'name' => 'news_link',
        'label' => 'Посилання на сторінку "До всiх новин"',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'adv_title',
        'label' => 'Заголовок "Оголошення"',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'video_title',
        'label' => 'Заголовок "Вiдео"',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'video_title',
        'label' => 'Заголовок "Регiональнi новини"',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'video_title',
        'label' => 'Заголовок "До всiх регiональних новин"',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'video_link',
        'label' => 'Посилання на сторінку "До всiх регiональних новин"',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'stat_title',
        'label' => 'Заголовок "Статистика"',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'numb_title',
        'label' => 'Заголовок "Про роботу в цифрах"',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'numb_info_title',
        'label' => 'Опис до блоку "Про роботу в цифрах"',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'numb_info_link_text',
        'label' => 'Текст кнопки "Про роботу в цифрах"',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'numb_info_link_text',
        'label' => 'Посилання на сторінку "Про роботу в цифрах"',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'prok_title',
        'label' => 'Заголовок "Прокуратура"',
        'translated' => true,
    ])
    @formField('input', [
        'name' => 'pres_title',
        'label' => 'Заголовок "Прес-центр"',
        'translated' => true,
    ])
    @formField('input', [
        'name' => 'zver_title',
        'label' => 'Заголовок "Звернутися"',
        'translated' => true,
    ])
    @formField('input', [
        'name' => 'zak_title',
        'label' => 'Заголовок "Законодавство"',
        'translated' => true,
    ])
    @formField('input', [
        'name' => 'obl_title',
        'label' => 'Заголовок "Сайти обласних прокуратур"',
        'translated' => true,
    ])
    @formField('input', [
        'name' => 'prac_title',
        'label' => 'Заголовок "Працівникам прокуратури"',
        'translated' => true,
    ])





@stop