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
    return view('welcome');
});

//Route:get('/')

Auth::routes();

//Route::get('/{any}', 'home') ->where ('am')

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/{pathMatch}', function () {return view('welcome');})-> where('pathMatch',".*");

