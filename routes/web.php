<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome',['name' => 'John']);
});


Route::get('/user/{id?}', function($id = null){
    return 'User ' . $id;
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('users');
Route::post('/users', 'UserController@store')->name('user.store');
Route::get('/users/create', 'UserController@create');
Route::get('/users/{id}', 'UserController@show')->name('user.show');
Route::delete('/users/{id}', 'UserController@destroy')->name('user.destroy');

Route::resource('/posts', 'PostController');