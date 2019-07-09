@extends('layouts.plantilla')
@section('principal')
<div class="container-fluid">
<br><br>
<section class="">
        <h1 class="regh1">Resultados de Búsqueda</h1>
    </section>
    <article class="form  col-xs-12 col-md-12 col-lg-12">
        <h2 class="regtitulo"><strong>Resultados</strong></h2>
  <br><br>
<ul>
                @forelse ($products as $product)
                    <li><a href="/product/{{$product->id}}"> {{ $product->name}} </a> {{' : ' . $product->description}}</li>
                    @empty
                    <h4>No hay productos que correspondan a la búsqueda </h4>
                @endforelse
</ul>
    </article>
</div>
@endsection