<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function mostrarFormulario(){
        return view('inicio.poslogin');
    }
    
    public function logando(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $usuario = Usuario::where('email', $request->email)->first();

    if(!$usuario){
        return back()->withErrors(['email'=> 'Email não encontrado.'])->withInput();
    }

    if(!Hash::check($request->password, $usuario->password)){
        return back()->withErrors(['password'=> 'Senha incorreta.'])->withInput();
    }

    Auth::login($usuario);

    return redirect()->route('dashboard')
        ->with('success', 'Bem vindo '.($usuario->admin ? 'Admin' : 'Usuário comum'));
}


public function sair()
{
    Auth::logout();
    Session::flush();
    return redirect()->route('welcome')->with('success', 'Logout realizado com sucesso');
}
}