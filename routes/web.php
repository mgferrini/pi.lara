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
Route::get('/perfil/{id}', 'PerfilController@show') ;
Route::get("/product/{id}", "ProductsController@show");
Route::get("/category/{id}", "CategoriesController@show");
Route::get("/products", "ProductsController@index");
Route::get('/newProduct', 'ProductsController@create');  
Route::post('/adminProducts', 'ProductsController@store');
Route::get('/productDelete/{id}', 'ProductsController@delete'); //->middleware('auth');
Route::delete('/admin/{product}', 'ProductsController@destroy'); 
Route::get("/editProduct/{id}", "ProductsController@edit");
Route::patch('/admin/{product}', 'ProductsController@update');  
Route::post('/searchResults', 'HomeController@search');
Route::post('/carrito/{id}', 'UserProductController@show');
 



