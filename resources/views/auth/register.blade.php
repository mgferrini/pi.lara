@extends ("layouts.plantilla")

@if(count($errors)>0) 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@section("titulo")
   Phi Organic -  Registro
@endsection

@section ("principal")
<div class="container-fluid">
<br>
	<section class="row">
		<h1 class="regh1">Registro</h1>
	</section>
	<section class="registro row">
		<article class="regcolumna col-xs-12 col-md-4 col-lg-4">
			<h2 class="regtitulo2"> ¿Ya tenés cuenta?</h2>
			<br>
			<a class="btn regboton loginButton" href="{{ url('login') }}" role="button">Ingresar</a>
			<br><br>
			<img src="img/soapreg2.png" alt="jabon_arte" class="regimg">
		</article>
		<article class=" form regformulario col-xs-12 col-md-8 col-lg-8">
			<h2 class="regtitulo">Ingresa tus datos para registrarte </h2><br>
			<form method="POST" action="{{ route('register') }}" class="formV datosusuario" enctype= "multipart/form-data">
                        @csrf
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="first_name">Nombre</label>
						<input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
						<div id="errorFirstName"></div>	
					<!--	@error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        	@enderror -->
					</div>
					<div class="form-group col-md-6">
						<label for="last_name">Apellido</label>
						<input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
						<div id="errorLastName"></div>	
					<!--	@error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        	@enderror -->
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="email">Email</label>
						<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value=" {{ old('email') }}" required autocomplete="email">
						<div id="errorEmail"></div>	
					<!--	@error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror -->
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputPassword4">Contraseña</label>
						<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
						<div id="errorPassword"></div>
						<!--	@error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror -->
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Reconfirmar Contraseña</label>
						<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
						<div id="errorPasswordConfirmation"></div>
					</div>
				</div>
				<div class="regSubirAvatar"> Imagen de Perfil:
					<input type="file" name="avatar" id="avatar" value=" {{ old('avatar') }}">
					<div id="errorAvatar"></div>
				</div>
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="terminos" name="terminos" >
						<div id="errorTerminos"></div>
						<label class="form-check-label" for="terminos">
							He leído y acepto Términos y Condiciones
						</label>
					</div>
				</div>
				<button type="submit" class="btn regboton">Enviar</button>
			</form>
		</article>
	</section>
</div>
@endsection
