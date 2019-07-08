@extends('layouts.plantilla')
@section('principal')

@if(count($errors)>0) 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid">
    <br>
    <br>
	<section class="">
		<h1 class="regh1">Modificar productos</h1>
    </section>
    <article class="form regformulario col-xs-12 col-md-12 col-lg-12">
        <h2 class="regtitulo">Modificar producto existente</h2>
        <br><br>
        <form class="" action="{{url('/admin',$product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            <section class="row">
                    <article class=" col-xs-12 col-md-4 col-lg-4">
                        <br>
                            <div> <a href=""><img src=  {{ asset('img/' . $product->image) }} class="imgArt"></a></div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <br>
                                    <label  for="image" class="fontHeader"> Cambiar Imagen del Producto:</label>      
                                    <input type="file" name='image' value="{{ $product-> image}}">
                                </div>
                            </div>
                    </article>
                    <article class="form regformulario col-xs-12 col-md-8 col-lg-8">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name='name' value="{{ $product->name}}">
                             </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="description">Descripción Breve::</label>
                                <input type="textarea" class="form-control" name='description' value="{{$product->description }}">
                            </div>
                        </div>  
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="components">Esencias:</label>
                                <input type="text" class="form-control" name='components' value="{{$product->components }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="details">Detalle del Producto:</label>
                                <textarea style="height:100px" class="form-control" name='details' value="{{$product->details}}"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="price">Precio</label>
                                <input type="text" class="form-control" name='price' value="{{ $product->price}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label  for="stock">Stock:</label>
                                <input type="text" class="form-control" name='stock' value="{{$product->stock}}">
                            </div>
                        </div>
                         <div class="form-row">
                             <div class="form-group col-md-6">
                                <label  for="rating">Rating:</label>
                                <input type="number" class="form-control" name='rating' value="{{ $product->rating }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label  for="catefory_id">Categoría:</label>
                                <select class="form-control" name="category_id">
                                     @foreach($categories as $category)
                                        <option value="{{ $category-> id}}" {{ ( $product->category_id == $category->id ) ? 'selected' : '' }} > > 
                                            {{$category ->parent . ' ' . $category->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>                        
                    <hr>
                    <div class="form-row">
                        <input class="botAdmin" type="submit"  value="Confirmar">
                        &nbsp &nbsp &nbsp &nbsp &nbsp
                        <button class="botAdmin"><a href="/adminProducts">Cancelar</a></button> 
                    </div>
                </article>
        </section>
</form>
</article>
</div>
@endsection