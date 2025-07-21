@extends('layouts.app')
@section('content')

    <h2>Lista de usuários</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Acões</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nome}}</td>
                <td>{{ $usuario->email}}</td>
                <td>{{ $usuario->admin ? 'Sim' : 'Não'}}</td>
                <td>
                    <a href="{{ route('usuario.editarusuario', ['id' => $usuario->id]) }}" class="btn btn-primary btn-sm">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection