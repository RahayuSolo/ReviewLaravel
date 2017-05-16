<?php


Route::resource('articles', 'ArticlesController');

Route::get('/', 'ArticlesController@index')->name('root');

Route::get('/profile', 'StaticsController@profile')->name('profile');

