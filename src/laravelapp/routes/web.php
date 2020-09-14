<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/beans', 'BeanController@index')->name('beans.index');
    Route::get('/beans/{bean}/detail', 'BeanController@detail')->name('beans.detail');

    Route::get('/beans/create', 'BeanController@showCreateForm')->name('beans.create');
    Route::post('/beans/create', 'BeanController@create');
    Route::get('/beans/{bean}/edit', 'BeanController@showEditForm')->name('beans.edit');
    Route::post('/beans/{bean}/edit', 'BeanController@edit');
});
Auth::routes();
