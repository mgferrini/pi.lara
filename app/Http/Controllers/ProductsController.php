<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->only(''); //esto aplica el middelware a todos los metodos de este controlador/ si le agrego el only es solo para esos metodos / y tambien puedo poner el except para exceptuar paginas
    }
    public function show($id){
    
        $product=Product::find($id);
        $categories = Category::all();
        
        return view('product', [
            'product' => $product,
            'categories' => $categories,
            ]);
    
        }
 /* ADMIN PRODUCTS */

        public function index(){
            $products=Product::paginate(20);
            
            return view("admin/adminProducts")->with([
                'products'=> $products
                ]); 
        }

 /* NEW PRODUCTS */
        public function create(Request $req){
            $categories = Category::all();
            $categories=$categories->filter (function ($category){   //esto es para filtar que solo me traiga las subcateogrias
                return $category->id > 4;
            });
            return view('admin/newProduct',['categories'=>$categories] ); 
        }

        public function store(Request $req)
        {
           
        $this->validate($req, $this->getValidationRules(),$this->mensajes());
  
   // $ruta = $req->file("image")->store();
     //  $nombreArchivo= basename($ruta);
     
       $rutaArchivo=$req['image']->store('public/img');
       $nombreArchivo=basename($rutaArchivo);

        $product = \App\Product::create([
            'name' => $req->get('name'),
            'description' =>$req->get('description'),
            'components' =>$req->get('components'),
            'details' =>$req->get('details'),
            'price' =>$req->get('price'),
            'stock' =>$req->get('stock'),
            'rating' =>$req->get('rating'),
            'category_id' =>$req->get('category_id'),
            'image' =>$nombreArchivo,
        ]);
        return redirect("/admin/adminProducts");

    }
    private function getValidationRules() 
    {
        return [
            'name' => "string|unique:products,name", 
            'description' => "string",
            'details' => "string",
            'components' => "required|string",
            'rating' => "numeric|min:0|max:5",
            'price' => "required|integer",
            'stock' => "integer",
            'category_id' => 'required|exists:categories,id',
            'image' => "image"
        ];
    }
    private function mensajes()  
    {
        return [
            'required'=> "El campo :attribute no puede estar vacío",
            'string' => "El campo :attribute debe ser un texto",
            'numeric' => "El campo :attribute debe ser un numero",
            'integer' => "El campo :attribute debe ser un numero",
            'unique' => "El nombre :attribute ya existe",
            'max' => "El campo :attribute tiene un maximo de :max",
            'min' => "El campo :attribute tiene un minimo de :min",
        ];
    }

 /* DELETE PRODUCTS */

    public function delete($id){
        $product=Product::find($id);
        return view('admin/productDelete')->with('product',$product);
        }

     public function destroy(\App\Product $product)
        {
            $product->delete();
            return redirect('/adminProducts');
        }
 /* EDIT PRODUCTS */

        public function edit($id)
        {
            $categories = Category::all();
            $product=Product::find($id);
            return view('admin.editProduct', [
                'product' => $product,
                'categories' => $categories,
            ]);
        
        }

        public function update(Request $request, \App\Product $product)
        {
      
            $this->validate($request, $this->getValidationRulesEdit(), $this->mensajes()); 
            if($request->file("image") == null){
                $edit= $request->all();
                $product->update($edit);
                return redirect('/adminProducts'); 
            }
         
            $ruta = $request->file("image")->store('public/img');
            $nombreArchivo= basename($ruta);
    
            $edit= $request->all();  
            $edit['image']=$nombreArchivo;
            $product->update($edit);
            return redirect('/adminProducts'); 
        }
        private function getValidationRulesEdit() 
        {
            return [
                'description' => "string",
                'details' => "string",
                'components' => "required|string",
                'rating' => "numeric|min:0|max:5",
                'price' => "required|integer",
                'stock' => "integer",
                'category_id' => 'required|exists:categories,id',
                'image' => "image"
            ];
        }
}