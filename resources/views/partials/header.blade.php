<header>
    <div class="row">
        <div class="col-md-3">
            <a class="logo" href="/"><img src="{{asset('img/logo_hoja.png')}}" width="300" alt="logo" ></a>    
        </div>
        <div class="col-md-9">
	        <nav class="navbar navbar-expand-lg">
	            <div class="collapse navbar-collapse navOrder collapse show" id="navbarSupportedContent">
	                <ul class="navbar-nav flex-row">
                        @guest
                             <li class="nav-item dropdown">
                                    <a class="nav-link navflecha dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-user-plus fa-md icon"></i> 
                                    </a>  
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('login') }}"><i class="navuser">{{ __('Login') }}</i></a> 
                                        <a class="dropdown-item" href="{{ route('register') }}"><i class="navuser">{{ __('Registrarse') }}</i></a>
                                    </div>
                                </li>
                        @else
                            <p>
                                <img height="35" width="35" class="img-fluid rounded-circle" src="{{ asset('storage/avatars/' . auth()->user()->avatar) }}">
                                Hola {{ Auth::user()->first_name }}
                            </p>
                            <li class="nav-item dropdown">
                                <a class="nav-link navflecha dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-plus fa-md icon"></i> 
                                </a>  
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/perfil"><i class="navuser">{{ __('Editar Perfil') }}</i></a>
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
                        @endguest
	                        <li class="nav-item">
	                            <a class="nav-link" href="#">
	                                <i class="fas fa-shopping-basket fa-md icon navcart"></i>
	                            </a>
	                        </li>
	                 </ul>
	            </div>
	        </nav>
        </div>	
    </div>

