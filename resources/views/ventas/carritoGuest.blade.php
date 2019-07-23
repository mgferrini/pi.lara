@extends('layouts.plantilla')
@section('principal')
<div class="container-fluid">
<br><br>
<section class="">
	<h1 class="regh1">Mi Carrito</h1>
</section>
    <article class="form  col-xs-12 col-md-12 col-lg-12">
    <table class="table" id="miTabla">
        <thead class="tableTitles">
        <tr>
        <th scope="col"></th>
        <th scope="col" class="ColTitle">Producto</th>
        <th scope="col" class="ColTitle"></th>
        <th scope="col" class="ColTitle">Precio</th>
        <th scope="col" class="ColTitle">Cantidad</th>
        <th scope="col" class="ColTitle">Total</th>
        <th scope="col" class="ColTitle">Remover</th>
      </tr>
    </thead>
    <tbody class="regcarrito">
       
            @if (session()->get('user.cart') !== null )
      <tr >
          <form class="form-inline my-2 my-lg-0" action="/actualizar" method="post">
              @csrf
        @foreach (session()->get('user.cart') as $product)
    
          <th scope="row"><a href="/product/{{$product['id']}}"><img class="miniatura" src="{{ asset('storage/products/' . $product['image']) }}"></a></th>
          <td><a href="/product/{{$product['id']}}">{{$product['name']}}</a></td>
          <td><input name="products[{{$product['id']}}][id]" type="hidden"   value="{{$product['id']}}" > </td> 
          <td><input name="products[{{$product['id']}}][price]" type="text" class="form-control price" id="price{{$product['id']}}" value="{{$product['price']}}" readonly> </td>
         <td><input name="products[{{$product['id']}}][quantity]" min="1" item={{$product['id']}} id="quantity{{$product['id']}}"  class="form-control cant quantity" type="number" value="{{$product['quantity']}}"  /></td>  <!-- No toma cuando le pongo value=  $product['quantity']-->
         <td><input name="products[{{$product['id']}}][subTotal]" type="text" class="form-control subTotal" id="subTotal{{$product['id']}}" value="{{$product['subtotal']}}"></td>
         <td class="text-right"><a href='{{route('cart.remove', $product['id'])}}' class="btn btn-sm btn-secondary"><i class="fa fa-trash"></i> </a> </td>
        </tr>
      </tr>
      @endforeach
  
      @endif
      <tr >
      <th> </th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td> </td>
        </tr>

      <thead class="tableTotal">
          <tr>
          <th scope="col"></th>
          <th scope="col" class="ColTitle">TOTAL</th>
          <th scope="col" class="ColTitle"></th>
          <th scope="col" class="ColTitle"></th>
          <th scope="col" class="ColTitle"></th>
          <th scope="col" class="ColTitle"><div id="sum"></div> </th>
          <th scope="col" class="ColTitle"></th>
        </tr>
      </thead>
    </tbody>
  </table>
  <br><br>
  <div class="form-row botones">
  <button class="botAdmin" type="submit" id="eventBoton">Actualizar Carrito</button>
  </form>
  &nbsp &nbsp &nbsp &nbsp &nbsp
  <button class="botAdmin"> <a href="/">Seguir Comprando</a></button> 
  &nbsp &nbsp &nbsp &nbsp &nbsp
  <button class="botAdmin"><a href="/fin">Ir al checkout</a></button> 
</div>
   
  </div>
    <br>
</div>
@endsection