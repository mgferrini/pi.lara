<header>
  <div class="row">
    <div class="col-md-3">
      <a class="logo" href="/"><img src="{{asset('img/logo_hoja.png')}}" width="300" alt="logo" ></a>
    </div>
    <div class="col-md-9">
      <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse navOrder collapse show" id="navbarSupportedContent">
          <ul class="navbar-nav flex-row liBase">
            @guest
              <li class="nav-item dropdown">
                <a class="nav-link navflecha dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-plus fa-md icon"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item loginButton" href=""><i class="navuser">Login</i></a>
                  <a class="dropdown-item" href="{{ route('register') }}"><i class="navuser">{{ __('Registrarse') }}</i></a>
                </div>
                <form class="formLogin" accept-charset="UTF-8" role="form" action="{{ route('login') }}" method="post">
                  @csrf
                  <a class="formLogin-close"></a>
                  <div class="panel-heading">
                    <h2 class="regtitulo">Usuario y Contraseña</h2><br>
                  </div>
                  <div id="errorLogin"></div>
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
                      <div class="forgot text-center">
                        @if (Route::has('password.request'))
                          <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Olvide mi contraseña') }}
                          </a>
                        @endif
                      </div>
                      <hr>
                      <div class="text-center">¿Acaso no estas registrado?<br>
                        <a class="btn regboton" href="register">Registrate</a>
                      </div>
                    </form>



                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('carritoGuest')}}">
                      <i class="fas fa-shopping-basket fa-md icon navcart"></i>
                    </a>
                  </li>
                @else
                  <p>
                    <img height="35" width="35" class="img-fluid rounded-circle" src="{{ asset('storage/avatars/' . auth()->user()->avatar) }}">
                    <span class="fontHeader">Hola {{ Auth::user()->first_name }}</span>
                  </p>
                  <li class="nav-item dropdown">
                    <a class="nav-link navflecha dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user-plus fa-md icon"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{ url('profile') }}"><i class="navuser">{{ __('Editar Perfil') }}</i></a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="navuser">{{ __('Logout') }}</i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/carrito/{{Auth::user()->id }}">
                    <i class="fas fa-shopping-basket fa-md icon navcart"></i>
                  </a>
                </li>
                @if(Auth::user()->role === "2")
                  <li class="nav-item">
                    <a class="adminHeader" href="/adminProducts">
                      <span class="fontHeader">Admin</span>
                    </a>
                  </li>
                @endif
              @endguest

            </ul>
          </div>
        </nav>
      </div>
    </div>
