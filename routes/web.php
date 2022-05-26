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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/profile', function () {
    //
})->name('/');

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return $name;
});

Route::redirect('/hi', '/welcome'); 


