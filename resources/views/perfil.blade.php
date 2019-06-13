@extends ("plantilla")

@section("titulo")
   Pho Organic - Perfil
@endsection

@section ("principal")
<div class="container-fluid">
    <br>
    <section class="row">
		<h1 class="regh1">Perfil</h1>
	</section>
	<section class="registro row">
		<article class="form regformulario col-xs-12 col-md-8 col-lg-8">
			<h2 class="regtitulo">Modifica tus datos</h2><br>
			<form class="datosusuario" action="#" method="POST" enctype= "multipart/form-data"  >
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="nombre">Nombre *</label>
						<input type="text" class="form-control" name="nombre" id="nombre" value="@isset($perfil['nombre']) ? $perfil['nombre'] : '' @endif">
					</div>
					<div class="form-group col-md-6">
						<label for="apellido">Apellido</label>
						<input type="text" class="form-control" name="apellido" id="apellido" value="@isset($perfil['apellido']) ? $perfil['apellido'] : '' @endif">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="email">Email *</label>
						<input type="email" class="form-control" id="email" name="email" readonly value="@isset($perfil['email']) ? $perfil['email'] : '' @endif">
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
				<div class="regSubirAvatar"> * Imagen de Perfil:
					<input type="file" name="avatar" id="avatar">
				</div>
				<button type="submit" class="btn regboton">Enviar</button>
			</form>
        </article>
        <article class="regcolumna2 col-xs-12 col-md-4 col-lg-4">
			<img src="img/soapreg.png" alt="jabon_arte" class="regimg">
		</article>
	</section>
</div>
@endsection