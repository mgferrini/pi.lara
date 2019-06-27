@extends ("plantilla")

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
                <h2 class="regtitulo">Usuario y Contraseña</h2><br>
            </div>
            <div class="panel-body">
              <form method="POST" action="">
                      @csrf
                    <fieldset>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                              @error('email')
                                  <span class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>
                        <div class="form-group">
                          <input id="password" type="password" class="form-control @error('password') incorrecta @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                              @error('password')
                                  <span class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} value="Remember Me"> Recordarme
                            </label>
                        </div>
                        <input class="btn regboton" type="submit" value="Ingresar">
                        <hr>
                        <div class="forgot">
                          @if (Route::has('password.request'))
                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      {{ __('Forgot Your Password?') }}
                                  </a>
                              @endif
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </article>
    <article class="form regcolumna2 col-xs-12 col-md-4 col-lg-4">
      <h2 class="regtitulo2">¿Acaso no estas registrado?</h2>
      <p>Registrate para estar al tanto de las ultimas novedades acerca de los productos, los nuevos productos de Phi Organic, proximos lanzamientos y un monton de cosas mas.</p>
      <br>
      <a class="btn regboton" href="/register">Registrarse</a>
    </article>
  </section>
</div>
@endsection
