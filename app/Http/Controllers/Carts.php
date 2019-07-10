<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function show($id){
    
        $user=User::find($id);
        $products=Product::all();
      
        
        return view('product', [
            'user' => $user,
            'products' => $products,
            ]);
    
        }
        public function add($request){
    
            $cart = \App\UserProduct::create([
                'user_id' => $request->user->id,
                'product_id' =>$request->product->id,
                'price' =>$request->product->price,
                'quantity' =>$request->get('quantity'),
                'cart_id' =>$request->user->id,
            ]);
            
            return view('ventas/carrito',['user'=>$user] ); 
        
            }


}
