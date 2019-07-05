@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="row">

      <main class="col-sm-9">

        <h4>{{$title}}</h4>
        <hr>


        @foreach($products as $product)

          <article class="card card-product">
            <div class="card-body">
              <div class="row">
                <aside class="col-sm-3">
                  <div class="img-wrap"><img width="100px" height="100px"
                                             src="{{ asset("img/products/".$product->image ) }} "></div>
                </aside> <!-- col.// -->
                <article class="col-sm-6">
                  <h4 class="title"> {{ $product->name }}  </h4>

                  <p> {{ $product->description }}  </p>


                </article> <!-- col.// -->
                <aside class="col-sm-3 border-left">
                  <div class="action-wrap">
                    <div class="price-wrap h4">
                      <span class="price"> {{ $product->value }}  </span>
                    </div> <!-- info-price-detail // -->
                    <p class="text-success">Free shipping</p>
                    <br>
                    <p>
                      <a href="#" class="btn btn-primary"> Buy now </a>
                    </p>
                    <a href="#"><i class="fa fa-heart"></i> Add to wishlist</a>
                  </div> <!-- action-wrap.// -->
                </aside> <!-- col.// -->
              </div> <!-- row.// -->
            </div> <!-- card-body .// -->
          </article> <!-- card product .// -->

        @endforeach

        {{ $products->links() }}

      </main> <!-- col.// -->
    </div>

  </div>
@endsection
