<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
class UsuarioController extends Controller
{

    public function mostrarUsuarios(){
        return view('usuario.criarusuario');
    }

    public function criarUsuario(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|min:3'
        ]);

        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        return view('welcome')->with('success', 'Usuario criado com sucesso!');
    }

    public function listarUsuarios(){
        $usuarios = Usuario::all();
        return view('usuario.listarusuarios', compact('usuarios'));
    }

    //Controller de editar os cadastros
    public function editarCadastro($id){

        $usuarios = Usuario::findOrFail($id); //Busca o usuário ou dá erro 404 caso n encontre
        return view('usuario.editarusuario', compact('usuarios'));

    }

    public function atualizarCadastro(Request $request, $id){
        $usuarios = Usuario::findOrFail($id);

        //Validação que precisa ter nesses tipos de processo
        $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|email|unique:usuarios,email,' . $id,
            'admin' => 'required|boolean'
        ]);

        $usuarios -> update($request->only(['nome', 'email', 'admin']));

        return redirect()->route('dashboard')->with('success', 'Usuario atualizado com sucesso.');
    }

    public function excluirCadastro(Request $request, $id){
        $usuarios = Usuario::findOrFail($id);
        $usuarios -> delete();
        return redirect()->route('usuario.listarusuarios')->with('success', 'Usuario deletado com sucesso.');   
    }
    
}
