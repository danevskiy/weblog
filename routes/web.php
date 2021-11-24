<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', ('App\Http\Controllers\HomepageController@index'));

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function() {

Route::get('/', ('App\Http\Controllers\HomepageController@index'));

Route::get('/posts/{post}', ('App\Http\Controllers\PostpageController@index'));

Route::get('/categories/{category}', ('App\Http\Controllers\CategoryController@index'));

});

