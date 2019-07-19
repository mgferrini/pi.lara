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


public function update(Request $request, \App\User $id)
{
    $user=USER::find($id);
    
    $this->validate($request, $this->getValidationRulesEdit(), $this->mensajes()); 
    
    if($request->file("avatar") == null){

        $user->first_name = $request->input("first_name");
        $user->last_name = $request->input('last_name');
       $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();
        return redirect('/'); 
    }
 
    $ruta = $request->file("avatar")->store('public/avatars');
    $nombreArchivo= basename($ruta);

    $edit= $request->all();  
    $edit['avatar']=$nombreArchivo;
    $user->update($edit);
    return redirect('/'); 
}
private function getValidationRulesEdit() 
{
    return [
        'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
            'avatar' => [ 'image'],
        ];
}
private function mensajes()  
    {
        return [
            'required'=> "El campo :attribute no puede estar vacío",
            'string' => "El campo :attribute debe ser un texto",
            'max' => "El campo :attribute tiene un maximo de :max",
            'min' => "El campo :attribute tiene un minimo de :min",
        ];
    }

}