@extends ("layouts.plantilla")

@section("titulo")
   Phi Organic -  Contacto
@endsection

@section ("principal")
<div class="container">
    <br>
	<section class="row">
		<h1 class="regh1">
			Contacto
		</h1>
		<br><br><br>
    </section>
    @if( Session::has('messageToUser') )
      <div class="alert alert-success">{{Session::get('messageToUser')}}</div>
    @endisset
        <!--Form with header-->
        <form action="{{ url('contacto')  }}" method="post">
          @csrf()

         
          <div class="card rounded-0">
            <div class="card-header p-0">
              <div class="verde text-gray text-center py-2">
                <h3><i class="fa fa-envelope sobre"></i> Contactanos</h3>
                <p class="m-0">Con gusto te ayudaremos</p>
              </div>
            </div>
            <div class="card-body p-3">

              <!--Body-->
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </div>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-envelope "></i></div>
                  </div>
                  <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-comment "></i></div>
                  </div>
                  <textarea class="form-control" placeholder="Envianos tu Mensaje" required></textarea>
                </div>
              </div>

              <div class="text-center">
                <input type="submit" value="Enviar" class="btn verde btn-block rounded-0 py-2">
              </div>
            </div>

          </div>
    
    
        </form>
        <!--Form with header-->
      </div>

@endsection
