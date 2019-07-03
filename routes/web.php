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
    return view('phiorganic');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/faq', function () {
    return view('faq');
});

Auth::routes();

Route::get('logout', function () {
  auth()->logout();
  return redirect('/phiorganic');
});

//Route::get('/home', 'HomeController@index')->name('home');
