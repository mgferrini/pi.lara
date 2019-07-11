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
    <tbody class="regcarrito">
      
      <tr >
      @foreach ($products as $product)
    
          <th scope="row"><a href="/product/{{$product->id}}"><img class="miniatura" src="{{ asset('storage/products/' . $product->productos->image) }}"></a></th>
          <td><a href="/product/{{$product->id}}">{{$product->productos->name}}</a></td>
          <td>{{$product->price}}</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->quantity * $product->price}}</td>
            <form class="" action="{{url('/ventas/carrito/',$product->id)}}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <td>  <input class="" type="submit"  value="Eliminar"></td>
          </form>
      </tr>
      @endforeach
  
    </tbody>
  </table>
  
   
  </div>
    <br>
</div>
@endsection