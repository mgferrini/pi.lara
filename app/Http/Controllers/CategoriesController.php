<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class CategoriesController extends Controller
{
    public function show($id){
    
        $products=Product::all();
        $category = Category::find($id);
        
        return view('category', [
            'products' => $products,
            'category' => $category,
            ]);
    
        } //
}
