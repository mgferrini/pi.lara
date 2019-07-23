<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\CreateMovieRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/');
    }
    public function search(Request $request)
    {

    $products =\App\Product::query()->select('id', 'name', 'description')->where('name', 'like', '%' . $request->get('data') . '%');
  
    
/* Asi estaba en el git de Alejandro: pero no funciona .... 
       $products = \App\Product::query()->select('id', 'name', 'description');
        if ($request->has('name')) {
            $products->where('name', 'like', '%' . $request->get('data') . '%');
        }
        
        if ($request->has('category')) {
            $products->whereHas('category', function ($q) use ($request) {
                $q->where('name', $request->get('category'));
            });
        }*/

        return view('searchResults', [
            'products' => $products->get()
        ]);
    }
}
