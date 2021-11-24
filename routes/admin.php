<?php

use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
Route::module('menus');

 Route::group(['prefix' => 'pages'], function () {
    Route::module('posts');
    Route::module('categories');
});

Route::group(['prefix' => 'mainBlocks'], function () {
    Route::module('numbers');
    Route::module('statistics');
}); 
 