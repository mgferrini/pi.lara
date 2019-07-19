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
		<h1 class="regh1">Alta de productos</h1>
    </section>
    <article class="form regformulario col-xs-12 col-md-12 col-lg-12">
        <h2 class="regtitulo">Agregar producto nuevo</h2>
        <br><br>
        <form class="" action="{{ url('/adminProducts') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name='name' value="{{ old('name') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="description">Descripción Breve::</label>
                <input type="textarea" class="form-control" name='description' value="{{ old('description') }}">
            </div>
        </div>  
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="components">Esencias:</label>
                <input type="text" class="form-control" name='components' value="{{ old('components') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="details">Detalle del Producto:</label>
                <textarea style="height:100px" class="form-control" name='details' value="{{ old('details') }}"></textarea>
            </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="price">Precio</label>
                <input type="text" class="form-control" name='price' value="{{ old('price') }}">
            </div>
            <div class="form-group col-md-6">
                <label  for="stock">Stock:</label>
                <input type="text" class="form-control" name='stock' value="{{ old('stock') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label  for="rating">Rating:</label>
                <input type="number" class="form-control" name='rating' value="{{ old('rating') }}">
            </div>
            <div class="form-group col-md-6">
                <label  for="catefory_id">Categoría:</label>
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id}}" value="{{ old('category_id') }}" > 
                            {{$category ->getCategoriaCompleta()}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-12">
                <label  for="image">Imagen del Producto:</label>      
                <input type="file" name='image' value= "">
        </div>
    </div>
</article>
<hr>
    <div class="form-row">
            <input class="botAdmin" type="submit"  value="Confirmar">
            &nbsp &nbsp &nbsp &nbsp &nbsp
            <button class="botAdmin"><a href="/adminProducts">Cancelar</a></button> 
    </div>

</form>
</section>
</div>
@endsection