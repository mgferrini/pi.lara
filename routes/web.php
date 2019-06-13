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
    //$links = \App\Link::all();

    //return view('welcome', ['links' => $links]);
    return view('home');
});

Auth::routes();

Route::get('/miPrimeraRuta', function (){
	echo 'mi primer ruta en Lara';
});

Route::get('/resultado/{numero}/{numero2?}', function ($i,$j=0){
	if (empty($j)){
		
		echo "recibi el numero: $i";	
	}else {
	 	echo "reaultado: " . $i * $j;	
	}
	
});

Route::get('/home', 'HomeController@index')->name('home');

// Route::view('/nombrePagina', 'algunaPagina.php');
Route::get('/prueba/{numero}/{marca}', 'HomeController@prueba');

Route::get('/peliculas', 'PeliculasController@index');
Route::get('/peliculas/{id}', 'PeliculasController@buscarPeliculaId');
Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');