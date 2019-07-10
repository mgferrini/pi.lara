@extends ("layouts.plantilla")

@section("titulo")
   Pho Organic - Perfil
@endsection

@section ("principal")

@if(count($errors)>0) 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid">
    <br>
    <section class="row">
		<h1 class="regh1">Perfil</h1>
	</section>
	<section class="registro row">
		<article class="form regformulario col-xs-12 col-md-12 col-lg-12">
			<h2 class="regtitulo">Modifica tus datos</h2><br>
			<form class="datosusuario" action="{{url('/auth',$user->id)}}" method="POST" enctype= "multipart/form-data"  >
				@csrf
				{{ method_field('PATCH') }}
				<div class="form-row">
					<section class="row">
						<article class=" col-xs-12 col-md-4 col-lg-4">
							<br>
							<div> <a href=""><img src=  {{ asset('storage/avatars/' . $user->avatar) }} class="imgArt"></a>
							</div>
						</article>
						<article class="form  col-xs-12 col-md-8 col-lg-8">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="first_name">Nombre *</label>
									<input type="text" class="form-control" name="first_name" id="first_name" value="{{ $user->first_name}}">
								</div>
								<div class="form-group col-md-6">
									<label for="last_name">Apellido</label>
									<input type="text" class="form-control" name="last_name" id="last_name" value="{{ $user->last_name}}">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="email">Email *</label>
									<input type="email" class="form-control" id="email" name="email" readonly value="{{ $user->email}}">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputPassword4">Contraseña *</label>
									<input type="password" class="form-control" id="inputPassword4pass" name="password" value=''>
								</div>
								<div class="form-group col-md-6">
									<label for="inputPassword4">Reconfirmar Contraseña *</label>
									<input type="password" class="form-control" id="inputPassword4pass" name="repassword" value='' >
								</div>
							</div>
							<br>
							<div class="form-row">
								<div class="form-group col-md-12">
									<label  for="image" class=""> Cambiar Imagen:</label>      
									<input type="file" name='avatar' value="{{ $user-> avatar}}">
								</div>
							</div>
							<button type="submit" class="btn regboton">Enviar</button>
						</article>
					</section>
				</div>
			</form>
		</article>
	</section>
</div>
@endsection