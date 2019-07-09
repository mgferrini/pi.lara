@extends ("layouts.plantilla")
@section("titulo")
Phi Organic -  Admin
@endsection


@section ("principal")

 <br>
 <section class="section-content bg padding-y-sm">
     <div class="container-fluid">
         <br><br>
            <section class="">
                <h1 class="regh1">Eliminar producto</h1>
            </section>
            <section class="row">
                <h2 class="regtitulo">¿Estás seguro de que quieres eliminar este producto?</h2>
                <form class="" action="{{url('/admin',$product->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <div class="form-row">
                            &nbsp &nbsp &nbsp &nbsp &nbsp
                        <input class="botAdmin" type="submit"  value="Confirmar">
                        &nbsp &nbsp &nbsp &nbsp &nbsp
                        <button class="botAdmin"><a href="/adminProducts">Cancelar</a></button> 
                    </div>
                </form>
            </section>
            <hr>
            <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                            <main class="card">
                                <div class="row no-gutters">
                                    <aside class="col-sm-4">
                                        <article class="gallery-wrap"> 
                                            <div class="img-big-wrap">
                                                <div> <a href=""><img src=  {{ asset('img/' . $product->image) }} class="imgDel"></a></div>
                                            </div> <!-- slider-product.// -->
                                        </article> <!-- gallery-wrap .end// -->
                                    </aside>
                            <aside class="col-sm-8">
                                <article class="card-body">
                            <!-- short-info-wrap -->
                                    <h5 class="title mb-3 tituloprod">{{$product->name}}</h5>
                                    <div class="mb-3"> 
                                        <var class="price h5"> 
                                            <span class="currency precio">$</span><span class="num precio">{{$product->price}}</span>
                                        </var> 
                                    </div> <!-- price-detail-wrap .// -->
                                    <dl>
                                        <dt>Descripción</dt>
                                        <dd><p>{{$product->description}} </p></dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-3">Esencias</dt>
                                        <dd class="col-sm-9">{{$product->components}} </dd>
                                        <dt class="col-sm-3">Categoría</dt>
                                     
                                        <dd class="col-sm-9">
                                            @foreach($categories as $categoria)
                                            {{( $product->category_id == $categoria->id ) ? $categoria->getCategoriaCompleta(): ''}} 
                                            @endforeach
                                        </dd>
                                    </dl>
                                </article>
                            </aside>
                                </div>
                            </main>
                    </div>
            </div>
     </div>
 </section>
 @endsection