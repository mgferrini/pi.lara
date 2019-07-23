@extends('layouts.plantilla')
@section('principal')
<div class="container-fluid">
<br>
<section class="">
		<h1 class="regh1">Administrar Productos</h1>
    </section>
    <article class="form regformulario col-xs-12 col-md-12 col-lg-12">
        <h2 class="regtitulo"><strong>Listado de Productos</strong></h2>
  <br><br>
  <h5>Nuevo Producto:&nbsp;&nbsp;&nbsp;<button class="botAdmin"> <a href="{{ url('/newProduct') }}">Agregar </a> </button>  </h5>
  <br> 
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col" class="ColTitle">Nombre</th>
        <th scope="col" class="ColTitle">Ver Producto</th>
        <th scope="col" class="ColTitle">Modificar</th>
        <th scope="col" class="ColTitle">Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach ($products as $product)
          <th scope="row">{{$product->id}}</th>
          <td>{{$product->name}}</td>
          <td><a href="/product/{{$product->id}}"><i class="far fa-eye"></i></a></td>
          <td><a href="{{ url('editProduct/'. $product->id ) }}"><i class="fas fa-pen"></i></a></td>
          <td><a href="{{ url('productDelete/'. $product->id ) }}"><i class="far fa-window-close"></i></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="pagination">
      {{$products->links()}} 
  </div>
    <br>
</div>
@endsection