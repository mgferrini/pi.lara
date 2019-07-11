<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\Cart;
use \App\User;

class CartsController extends Controller
{
 
        public function addOne($idProd, $idUser){

            $product =  Product::find($idProd);
            $user = User::find($idUser);
            $cart = \App\Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'price' => $product->price,
                'quantity' => 1,
                'cart_id' =>$user->id,
            ]);

            $products =\App\Cart::query()->select('user_id', 'product_id', 'price', 'quantity')->where('user_id', 'like',  $idUser);

            return view('/ventas/carrito', [
                'products' => $products->get()
            ]);
        }

        public function addMany(Request $request, $idProd, $idUser){

            $product =  Product::find($idProd);
            $user = User::find($idUser);
            $cart = \App\Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => $request->get('quantity'),
                'price' => $product->price,
                'cart_id' =>$user->id,
            ]);

            $products =\App\Cart::query()->select('user_id', 'product_id', 'price', 'quantity')->where('user_id', 'like',  $idUser);

            return view('/ventas/carrito', [
                'products' => $products->get()
            ]);
        }
         
     
             /* ASI LO HIZO DANY:  public function add($id)
    {
      $product =  Product::find($id);
      $product = [
            'id' => $product->id,
            "name" => $product->name,
            'price' => $product->price,
            'image' => $product->imageLoc,
            'quantity' => 1,
      ];
       session()->put("user.cart." . $id, $product);
       
       return view('carrito');
    }
*/
            

            public function show($idUser){
                $user = User::find($idUser);
                $products =\App\Cart::query()->select('user_id', 'product_id', 'price', 'quantity')->where('user_id', 'like',  $idUser);
               
                return view('/ventas/carrito', [
                    'products' => $products->get()
                ]);
            }
        
            /*
            public function remove($idProd)
            {

                $deleted = \App\Cart::delete()-> from('user_product')->where('product_id', '===', $idProd);
           
                return view('/ventas/carrito', [
                    'products' => $products
                ]);
            }*/
        }


    

