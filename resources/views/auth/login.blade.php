@extends ("layouts.plantilla")

@section("titulo")
  Phi Organic - Login
@endsection

@section ("principal")
  <div class="container-fluid">
    <br>
    <section class="row">
      <h1 class="regh1">Login</h1>
    </section>
    <section class="registro row">
      <article class="form regformulario col-xs-12 col-md-8 col-lg-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="regtitulo">Usuario y Contraseña</h2><br></div>
            <div class="panel-body">
              <form accept-charset="UTF-8" role="form" method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <input class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" type="text" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" type="password" required autocomplete="current-password">
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="checkbox">
                      <input name="remember" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }} >
                      <label class="form-check-label" for="remember">
                        {{ __('Recordarme') }}
                      </label>
                    </div>
                    <br>
                    <input class="btn regboton" type="submit" value="Ingresar">
                    <hr>
                    <div class="forgot">
                      @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Olvide mi contraseña') }}
                        </a>
                      @endif
                    </div>
                  </form>
                </div>
              </div>
            </article>
            <article class="form regcolumna2 col-xs-12 col-md-4 col-lg-4">
              <h2 class="regtitulo2">¿Acaso no estas registrado?</h2>
              <p>Registrate para estar al tanto de las ultimas novedades acerca de los productos, los nuevos productos de Phi Organic, proximos lanzamientos y un monton de cosas mas.</p>
              <br>
              <a class="btn regboton" href="register">Registrarse</a>
            </article>
          </section>
        </div>
      @endsection
