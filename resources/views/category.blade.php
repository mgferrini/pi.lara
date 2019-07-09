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
	<!--<section class="row">
	    <article class="banner1">
            <h5 class="titulocursiva">Phi Organic</h5>
            <h3 class="tituloppal">{{$category->parentCategory->name . " ". $category->name}}</h3>
        </article>   
    </section> -->
    <h3>{{$category->parentCategory->name . " ". $category->name}}</h3>
    <div class="articulos container_fluid">
        @foreach($products as $product)
            @if($product->category_id == $category->id)
                <article class="prod col-xs-12 col-md-6 col-lg-4">
                    <img src="/img/{{$product->image}}" class="imgCat">
                    <h4 class="nombreArt">
                        <a href="{{ url('product/'. $product->id ) }}" class="title">{{$product->name}}</a>
                    </h4> 
                    <span class="priceCat">{{'$ ' . $product->price}}</span>
                    <p class="parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sed suscipit dolorem.</p>
                    <a href="#" class="btn botcarrito"> Agregar al carrito </a>
                    <br>
                </article>
            @endif
        @endforeach
    </div>
</div>
@endsection

