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
Route::get('/hello', function()
{
  return view('hello');
});

Route::get('/create', function()
{
  return view('create');
});

Route::post('/Register', "UserControl@Register");
Route::get('/all', "UserControl@all");
Route::get('/user/{id}', "UserControl@showdetail");
Route::get('/delete/{id}', "UserControl@delete");
Route::get('/update/{id}', "UserControl@update");
Route::post('/updaterecord/{id}', "UserControl@updaterecord");
