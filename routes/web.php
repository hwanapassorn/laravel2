<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('posts');

Route::redirect('/', 'posts');

Route::resource('/posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/menu', 'PostsController@mymenu');

Route::get('/6013150004', function () {
    return "Napassorn Zuman NO: 6013150004";
});

Route::get('/6014110012', function () {
    return "์Natthamon poungchu NO: 6014110012";
});
