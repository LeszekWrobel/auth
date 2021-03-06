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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'MessagesController@index')->name('index');

// Route::edit('/index/edit', 'PagesController@edit')->name('edit');

// Route::destroy('/index', 'PagesController@index')->name('index');

Route::get('/add', 'AddController@index')->name('add');

Route::post('/add/submit', 'AddController@submit')->name('submit');

Route::get('/kontakt', 'PagesController@index')->name('kantakt');

//Route::get('/kontakt/destroy', 'PagesController@destroy')->name('destroy') ;

//Route::resource('kontakt','PagesController');

Route::resource('/index', 'PagesController');
