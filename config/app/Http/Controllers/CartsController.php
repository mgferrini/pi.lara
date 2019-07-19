<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\Cart;
use \App\User;
use DB;

class CartsController extends Controller
{
 
        public function addOne($idProd, $idUser, $cantidad=1){

            $product =  Product::find($idProd);
            $user = User::find($idUser);
            $cart = \App\Cart::firstOrNew([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'cart_id' =>$user->id,
            ]);
            $cart->quantity = $cart->quantity + $cantidad;
            $cart->price= $product->price;
            $cart->save();
            return $this->show($idUser);
        }

        public function addMany(request $request, $idProd, $idUser){

            return $this->addOne($idProd, $idUser, $request->quantity);
         
        }
         

            public function show($idUser){
                $user = User::find($idUser);
                $cartProducts =\App\Cart::query()->select('id','user_id', 'product_id', 'price', 'quantity', DB::raw('(price * quantity) as subtotal'))->where('user_id', 'like',  $idUser);
               
                $cartProducts = $cartProducts->get();
                $totalAcumulado = $cartProducts->sum('subtotal');
                
                return view('/ventas/carrito', [
                    'cartProducts' => $cartProducts,
                    'totalAcumulado'=>$totalAcumulado,
                ]);
            }
        
    
            public function destroy(\App\Cart $product, $idUser)
            {
                $product->delete();
               $cartProducts =\App\Cart::query()->select('id','user_id', 'product_id', 'price', 'quantity')->where('user_id', 'like',  $idUser);
               
               return $this->show($idUser);
               
            }
        }


    
