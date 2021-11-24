@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'title',
        'label' => 'Заголовок',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'text_cat',
        'label' => 'Текст посилання на сторінку категорії',
        'translated' => true,
        'maxlength' => 100
    ])
    
@stop
