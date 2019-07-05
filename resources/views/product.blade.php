@extends ("layouts.plantilla")

@section("titulo")
   Phi Organic -  Productos
@endsection


@section ("principal")
   
    <br>
    <section class="section-content bg padding-y-sm">
        <div class="container-fluid">
            <nav class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a></li>
                    <li class="breadcrumb-item">
                        <a href="#">Categoria</a></li>
                <li class="breadcrumb-item"><a href="{{ url('category/'. $product->category_id ) }}">{{$product->category->name}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol> 
            </nav>
            <br>
            <div class="row">
                <div class="col-xl-10 col-md-9 col-sm-12">
                        <main class="card">
                            <div class="row no-gutters">
                                <aside class="col-sm-6">
                                    <article class="gallery-wrap"> 
                                        <div class="img-big-wrap">
                                            <div> <a href=""><img src="/img/{{$product->image}}" class="imgArt"></a></div>
                                        </div> <!-- slider-product.// -->
                                    </article> <!-- gallery-wrap .end// -->
                                </aside>
                        <aside class="col-sm-6">
                            <article class="card-body">
                        <!-- short-info-wrap -->
                                <h3 class="title mb-3 tituloprod">{{$product->name}}</h3>
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
                                    <dt class="col-sm-3">Acción</dt>
                                    <dd class="col-sm-9">{{$product->category->name}} </dd>
                                </dl>
                                <div class="rating-wrap">
                                    <ul class="rating-stars">
                                        <span style="width:80%" class="stars-active"> 
                                            <i class="fa fa-star checked"></i> <i class="fa fa-star checked"></i> 
                                            <i class="fa fa-star checked"></i> <i class="fa fa-star {{($product->rating>3)?'checked':''}} "></i> 
                                            <i class="fa fa-star {{($product->rating>4)?'checked':''}}"></i> 
                                        </span>
                                    </ul>
                                </div> <!-- rating-wrap.// -->
                               
                                <div class="row">
                                    <div class="col-sm-5">
                                        <dl class="dlist-inline">
                                            <dt>Cantidad: </dt>
                                            <dd> 
                                                <select class="form-control form-control-sm" style="width:70px;">
                                                    <option> 1 </option>
                                                    <option> 2 </option>
                                                    <option> 3 </option>
                                                </select>
                                            </dd>
                                        </dl>  <!-- item-property .// -->
                                    </div> <!-- col.// -->
                                </div> <!-- row.// -->
                            
                                <a href="#" class="btn botcarrito"> Agregar al carrito </a>
            <!-- short-info-wrap .// -->
                            </article> <!-- card-body.// -->
                        </aside> <!-- col.// -->
                    </div> <!-- row.// -->
                    </main> <!-- card.// -->
            
            <!-- PRODUCT DETAIL -->
                    <article class="card mt-3">
                        <div class="card-body">
                            <h4>Detalles</h4>
                                <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi deserunt mollit anim id est laborum.</p>
                                <p> Excepteurididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. </p>
            
                        </div> <!-- card-body.// -->
                    </article> <!-- card.// -->
            
            <!-- PRODUCT DETAIL .// -->
            
                </div> <!-- col // -->
                <aside class="col-xl-2 col-md-3 col-sm-12 prel">
            
                    <div class="card mt-3">
                        <div class="card-header">
                    Productos Relacionados
                        </div>
                        <div class="card-body row">
                            <div class="col-md-12 col-sm-3">
                                <figure class="item border-bottom mb-3">
                                    <a href="#" class="img-wrap"> <img src="img/soapreg2.png" class="img-md imgPRel"></a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Crema de citronella</a>
                                        <div class="price-wrap mb-3">
                                            <span class="price-new">$280</span> <del class="price-old">$280</del>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure> <!-- card-product // -->
                            </div> <!-- col.// -->
                            <div class="col-md-12 col-sm-3">
                                <figure class="item border-bottom mb-3">
                                    <a class="img-wrap"> <img src="img/soapreg2.png" class="img-md imgPRel"></a>
                                    <figcaption class="info-wrap">
                                        <a href="#" href="#" class="title">Aceite esencial</a>
                                        <div class="price-wrap mb-3">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure> <!-- card-product // -->
                            </div> <!-- col.// -->
                            <div class="col-md-12 col-sm-3">
                                <figure class="item border-bottom mb-3">
                                    <a href="#" class="img-wrap"> <img src="img/soapreg2.png" class="img-md imgPRel"></a>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">Limpieza absoluta</a>
                                        <div class="price-wrap mb-3">
                                            <span class="price-new">$280</span>
                                        </div> <!-- price-wrap.// -->
                                    </figcaption>
                                </figure> <!-- card-product // -->
                            </div> <!-- col.// -->
                        </div> <!-- card-body.// -->
                    </div> <!-- card.// -->
                </aside> <!-- col // -->
            </div> <!-- row.// -->
            
            
            
        </div><!-- container // -->
    </section>
            <!-- ========================= SECTION CONTENT .END// ========================= -->
       
@endsection