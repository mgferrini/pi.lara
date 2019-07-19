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
Route::get("/adminProducts", "ProductsController@index")->middleware('auth', 'role:admin');
Route::get('/newProduct', 'ProductsController@create')->middleware('auth', 'role:admin');
Route::post('/adminProducts', 'ProductsController@store')->middleware('auth', 'role:admin');
Route::get('/productDelete/{id}', 'ProductsController@delete')->middleware('auth', 'role:admin');
Route::delete('/admin/{product}', 'ProductsController@destroy')->middleware('auth', 'role:admin');
Route::get("/editProduct/{id}", "ProductsController@edit")->middleware('auth', 'role:admin');
Route::patch('/admin/{product}', 'ProductsController@update')->middleware('auth', 'role:admin');
Route::post('/searchResults', 'HomeController@search');
Route::post('/carrito/{id}/{user}', 'CartsController@addOne'); 
Route::get('/carrito/{user}', 'CartsController@show') ; 
Route::delete('/cartDel/{product}/{id}', 'CartsController@destroy') ; 
Route::post('/cart/{id}/{user}', 'CartsController@addMany'); 
Route::get('/contacto', function () {
    return view('contacto');
});
Route::post('/contacto', function (){
    return redirect()->back()->with(['messageToUser'=> 'gracias, nos estaremos comunicando con uds en los proximos 30 años.' ]);
  });