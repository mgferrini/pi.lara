<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
		
		 public $peliculas = [

					1 => "Toy Story",

					2 => "Buscando a Nemo",

					3 => "Avatar",

					4 => "Star Wars: Episodio V",

					5 => "Up",

					6 => "Mary and Max"

					];
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('peliculas/peliculas', ['peliculas' => $this->peliculas ] );
    }
    
    public function buscarPeliculaId($id){
        if($id > count($this->peliculas)){
        	return 'ya te pasaste de la raya';
        }else{
        	return dd($this->peliculas[$id]);
        }
    }
    
    public function buscarPeliculaNombre($busqueda){
    	$encontradas = [];
    	
    	foreach($this->peliculas as $key){
        if( stristr( $key, $busqueda ) ){
            $encontradas[] = $key;
        }
    	}
    	
    	if(empty($encontradas)){
    		$encontradas[] = "no hay ninguna pelicula que coincida con: $busqueda";
    	}
    	
    	return view('peliculas/peliculas', ['peliculas' => $encontradas ] );
    	
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
