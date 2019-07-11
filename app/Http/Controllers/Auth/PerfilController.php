<?php
  
  namespace App\Http\Controllers\Auth;

  use App\Http\Controllers\Controller;
  use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PerfilController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';

    public function index(){
        return view('auth.perfil');
    }
}
