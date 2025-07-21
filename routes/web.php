<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Criando usuario
Route::get('/usuario/criarusuario', [UsuarioController::class, 'mostrarUsuarios'])->name('mostrarUsuario');

Route::post('/usuario/criarusuario', [UsuarioController::class, 'criarUsuario'])->name('criarUsuario');
//Logando no sistema
Route::get('/inicio/poslogin', [LoginController::class, 'mostrarFormulario'])
->middleware('auth')
->name('mostrarFormulario');

Route::post('/inicio/poslogin', [LoginController::class, 'logando'])->name('logando');

Route::post('/logout', [LoginController::class, 'sair'])->name('logout');

// Formulário de edição
Route::get('/usuario/editarusuario/{id}', [UsuarioController::class, 'editarCadastro'])->name('usuario.editarusuario');
// Salvar alterações
Route::post('/usuario/atualizar/{id}', [UsuarioController::class, 'atualizarCadastro'])->name('usuario.atualizar');

Route::delete('/usuario/deletar/{id}', [UsuarioController::class, 'excluirCadastro'])->name('usuario.excluir');
//Tela antes de editar
Route::get('/usuario/listarusuarios', [UsuarioController::class, 'listarUsuarios'])->name('usuario.listarusuarios');


// Página inicial após login
Route::get('/dashboard', function(){
    return view('dashboard'); // Crie essa view para o painel de usuário/admin
})->middleware('web','auth')->name('dashboard');