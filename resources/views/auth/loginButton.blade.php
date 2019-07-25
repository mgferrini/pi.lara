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