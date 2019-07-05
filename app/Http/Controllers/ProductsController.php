<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->only('index'); //esto aplica el middelware a todos los metodos de este controlador/ si le agrego el only es solo para esos metodos / y tambien puedo poner el except para exceptuar paginas
    }
    public function show($id){
    
        $product=Product::find($id);
        $categories = Category::all();
        
        return view('product', [
            'product' => $product,
            'categories' => $categories,
            ]);
    
        }
    }
