<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Flash;
class UserController extends Controller
{
  public function check(Request $request)
  {
    $user = User::find($request->id)->get();
    return $user;
  }
  public function edit()
  {
    $user = \Auth::user();
    return view('auth.profile', compact('user'));
  }
  public function update(Request $request)
  {
    $this->validate(request(), [
      'first_name' => 'required|max:255',
      'last_name' => 'required|max:255',
      // 'email' => 'required|email|max:255|unique:users',
      'password' => 'min:6|confirmed'
    ]);
    $user = auth()->user();
    $user->first_name = $request->get('first_name');
    $user->last_name = $request->get('last_name');
    // $user->email = request('email');
    if ($request->has('password')) {
      $user->password = bcrypt(request('password'));
    }
    $user->update();
    $request->session()->flash('user.updated', 'Sus datos de perfil se han actualizado!');

    return back();
  }
}
