@extends ("layouts.plantilla")

@section("titulo")
   Phi Organic -  Productos
@endsection

@section ("principal")
<div class="container-fluid">
    <br>
	<section class="row">
		<br><br>
	</section>
	<section class="row">
	    <article class="banner2">
            <h5 class="titulocursiva">Phi Organic</h5>
            <h3 class="tituloppal">{{$category->parentCategory->name . " ". $category->name}}</h3>
        </article>   
    </section> 
   <!-- <h3>{{$category->parentCategory->name . " ". $category->name}}</h3>-->
    <div class="articulos container_fluid">
        @foreach($products as $product)
            @if($product->category_id == $category->id)
                <article class="prod col-xs-12 col-md-6 col-lg-4">
                    <a href="{{ url('product/'. $product->id ) }}">
                        <img src="{{ asset('storage/products/' . $product->image) }}" class="imgCat"> </a>
                    <h4 class="nombreArt">
                        <a href="{{ url('product/'. $product->id ) }}" class="title">{{$product->name}}</a>
                    </h4> 
                    <span class="priceCat">{{'$ ' . $product->price}}</span>
                    <p class="parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sed suscipit dolorem.</p>
                    @guest
                    <form class="form-inline my-2 my-lg-0" action="/carritoGuest/{{$product->id}}" method="">
                        @csrf
                        <input type="hidden" name="quantity" value="1"> 
                        <input  type="submit"  class="btn botcarrito" value="Agregar al carrito">
                        <br>
                        </form> 
                    @else
                    <form class="form-inline my-2 my-lg-0" action="/carrito/{{$product->id}}/{{ Auth::user()->id }}" method="post">
                    @csrf
                    <input  type="submit" class="btn botcarrito" value="Agregar al carrito">
                    <br>
                    </form>
                    @endguest
                </article>
            @endif
        @endforeach
    </div>
</div>
@endsection

