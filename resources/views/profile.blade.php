@extends ("layouts.plantilla")

@section("titulo")
   Phi Organic - Perfil
@endsection

@section ("principal")
<div class="container-fluid">
    <br>
    <section class="row">
		<h1 class="regh1">Perfil</h1>

    @if(session()->has('user.updated'))
      <div class="alert-success">{{ session('user.updated') }}</div>
    @endif
	</section>
	<section class="registro row">
		<article class="form regformulario col-xs-12 col-md-8 col-lg-8">
			<h2 class="regtitulo">Modifica tus datos</h2><br>
			<form class="datosusuario" action="{{ route('profile') }}" method="POST" enctype= "multipart/form-data">
        @csrf

 				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="nombre">Nombre *</label>
						<input type="text" class="form-control" name="first_name" id="nombre"
                    value="{{ old('first_name', $user['first_name']) }}">
            <p class="text-danger">{{ $errors->first('first_name') }}</p>
					</div>
					<div class="form-group col-md-6">
						<label for="apellido">Apellido</label>
						<input type="text" class="form-control" name="last_name" id="apellido"
                    value="{{ old('last_name', $user['last_name']) }}">
                    <p class="text-danger">{{ $errors->first('last_name') }}</p>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="email">Email *</label>
						<input type="email" class="form-control" id="email" name="email" readonly
                    value="{{ old('email', $user['email']) }}">
                    <p class="text-danger">{{ $errors->first('email') }}</p>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputPassword4">Contraseña *</label>
						<input type="password" class="form-control" id="inputPassword4pass" name="password" value=''>
            <p class="text-danger">{{ $errors->first('password') }}</p>
					</div>
					<div class="form-group col-md-6">
						<label for="inputPassword4">Reconfirmar Contraseña *</label>
						<input type="password" class="form-control" id="inputPassword4pass" name="password_confirmation" value='' >
            <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
					</div>
				</div>
				<div class="regSubirAvatar"> * Imagen de Perfil:
					<input type="file" name="avatar" id="avatar">
          <p class="text-danger">{{ $errors->first('avatar') }}</p>
				</div>
				<button type="submit" class="btn regboton">Enviar</button>
			</form>
        </article>
        <article class="regcolumna2 col-xs-12 col-md-4 col-lg-4">
			<img src="img/editperfil.jpg" alt="jabon_arte" class="regimg">
		</article>
	</section>
</div>
@endsection
