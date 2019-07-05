<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PerfilController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';

    public function index(){
        return view('auth.perfil');
    }
}
