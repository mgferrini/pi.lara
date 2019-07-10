@extends('layouts.plantilla')
@section('principal')
<div class="container-fluid">
<br><br>
<section class="">
	<h1 class="regh1">Mi Carrito</h1>
</section>
    <article class="form  col-xs-12 col-md-12 col-lg-12">
    <table class="table">
        <thead class="tableTitles">
        <tr>
        <th scope="col"></th>
        <th scope="col" class="ColTitle">Producto</th>
        <th scope="col" class="ColTitle">Precio</th>
        <th scope="col" class="ColTitle">Cantidad</th>
        <th scope="col" class="ColTitle">Total</th>
        <th scope="col" class="ColTitle">Remover</th>
      </tr>
    </thead>
    <tbody class="regformulario">
      <tr >
      @foreach ($products as $product)
          <th scope="row"><a href="/product/{{$product->id}}" class="miniatura">{{$product->image}}</a></th>
          <td><a href="/product/{{$product->id}}">{{$product->name}}</a></td>
          <td>{{$product->price}}</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->quantity * $product->price}}</td>
          <td><a href=""><i class="far fa-window-close"></i></a></td>
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