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

Route::get('/mi-ruta', function ()
{
  return 'Soy un ruta';
});


Route::get('/usuario/{id}', function ($id)
{
  return 'usuario: '. $id;
})->where('id', '[0-9]+');

Route::get('/usuario/{name}', function ($name)
{
  return 'mi nombre es: '. $name;
});
