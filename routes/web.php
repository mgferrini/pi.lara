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
Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});
Route::get('/perfil', 'PerfilController@index') ;

Route::get("/product/{id}", "ProductsController@show");
Route::get("/category/{id}", "CategoriesController@show");
Route::get("/adminProducts", "ProductsController@index");
Route::get('/newProduct', 'ProductsController@create');  
Route::post('/adminProducts', 'ProductsController@store');
Route::get('/productDelete/{id}', 'ProductsController@delete'); //->middleware('auth');// entras aca y cuando haces submit ejecutas el destroy
Route::delete('/admin/{product}', 'ProductsController@destroy'); 
Route::get("/editProduct/{id}", "ProductsController@edit");
Route::patch('/admin/{product}', 'ProductsController@update');  
Route::post('/searchResults', 'HomeController@search');
 



