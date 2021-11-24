@extends('twill::layouts.form')

@section('contentFields')
@formField('input', [
        'name' => 'title',
        'label' => 'Заголовок',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'sub_title',
        'label' => 'Підзаголовок',
        'translated' => true,
        'maxlength' => 100
    ])
    @formField('input', [
        'name' => 'description',
        'label' => 'Опис',
        'translated' => true,
        'maxlength' => 100
    ])
@stop
