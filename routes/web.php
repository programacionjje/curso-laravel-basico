<?php
Route::get('/', 'ProductController@index')->name('home');

/********** Routes products  **********/
Route::get('/products/create', 'ProductController@create');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');
Route::post('/products', 'ProductController@store')->name('products');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::post('/products/update/{product}', 'ProductController@update')->name('products.update');
Route::post('/products/delete/{product}', 'ProductController@delete')->name('products.delete');
/********** End Routes products  **********/

Auth::routes();
