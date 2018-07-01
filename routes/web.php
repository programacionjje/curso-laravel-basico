<?php
Route::get('/', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Auth::routes();
