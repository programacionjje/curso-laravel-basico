<?php
Route::get('/', 'ProductController@index')->name('home');
Route::get('/products/create', 'ProductController@create');

Route::post('/products', 'ProductController@store')->name('products');




Auth::routes();
