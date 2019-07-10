<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class PerfilController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';

    public function show($id){
        $user=USER::find($id);
        return view("auth/perfil")->with([
            'user'=> $user
            ]); 
}
}