@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Title',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('select', [
    'name' => 'menu_id',
    'searchable' => true,
    'label' => 'Родительский пункт меню',
    'placeholder' => 'Выберите пункт меню',
    'options' => $menus
])
@formField('select', [
    'name' => 'post_id',
    'searchable' => true,
    'label' => 'Если данный пункт это публикация',
    'placeholder' => 'Выберите публикацию',
    'options' => $posts
])
    
@stop
