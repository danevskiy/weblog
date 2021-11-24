@extends('twill::layouts.form')



@section('contentFields')
@formField('input', [
        'name' => 'title',
        'label' => 'Заголовок',
        'translated' => true,
        'maxlength' => 100,
    ])
    @formField('select', [
    'name' => 'cat_id',
    'label' => 'Категория',
    'searchable' => true,
    'placeholder' => 'Выберите категорию',
    'options' => $categories
])

@formField('medias', [
    'name' => 'cover',
    'label' => 'Изображение',
])


@formField('date_picker', [
    'name' => 'created_at',
    'label' => 'Дата публикации',

])

@formField('block_editor', [
    'label' => 'Контент',
])


@stop
