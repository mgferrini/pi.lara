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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/faq', function () {
    return view('faq');
});
Route::get('/terminos', function () {
    return view('terminos');
});
Route::get('/Privacidad', function () {
        return view('Privacidad');
});
Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/fin', function () {
    return view('fin');
});
Route::get('/perfil/{id}', 'PerfilController@show') ;
Route::patch('/perfil/{id}', 'PerfilController@update'); 
Route::get("/product/{id}", "ProductsController@show");
Route::get("/category/{id}", "CategoriesController@show");
Route::get("/adminProducts", "ProductsController@index");
Route::get('/newProduct', 'ProductsController@create');  
Route::post('/adminProducts', 'ProductsController@store');
Route::get('/productDelete/{id}', 'ProductsController@delete'); //->middleware('auth');
Route::delete('/admin/{product}', 'ProductsController@destroy'); 
Route::get("/editProduct/{id}", "ProductsController@edit");
Route::patch('/admin/{product}', 'ProductsController@update');  
Route::post('/searchResults', 'HomeController@search');
Route::post('/carrito/{id}/{user}', 'CartsController@addOne'); 
Route::get('/carrito/{user}', 'CartsController@show') ; 
Route::delete('/cartDel/{product}/{id}', 'CartsController@destroy') ; 
Route::post('/cart/{id}/{user}', 'CartsController@addMany'); 

