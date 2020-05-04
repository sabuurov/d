<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'learnController@index')->name('home');
Route::post('/ms', 'learnController@wel')->name('welc');
Route::get('/reg', 'learnController@registr')->name('reg');
Route::post('/reg', 'learnController@store')->name('store');
Route::get('/profile', 'learnController@profile')->name('profile');
Route::get('/edit', 'learnController@edit')->name('edit');
Route::post('/rs', 'learnController@sign')->name('sign');

// Route::get('/edit/{id}', 'learnController@edit')->name('edit');
// Route::post('/update/{id}', 'learnController@update')->name('update');
// Route::delete('/delete/{id}', 'learnController@store')->name('delete');
// // Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('login', 'AdminAuthController@getLogin')->name('login');
    Route::post('login', 'AdminAuthController@postLogin');
});

Route::middleware('auth:admin')->group(function(){
    //here all your admin routes

});

