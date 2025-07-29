@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form action="{{ route('usuario.atualizar', $usuarios->id) }}" method="POST" class="bg-white p-4 rounded shadow" style="width: 100%; max-width: 500px;">
            @csrf
            <h2 class="mb-4 text-center fw-bold">Editar Usuários</h2>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input class="form-control border border-dark rounded" name="nome"type="text" class="form-control" value="{{$usuarios->nome}}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control border border-dark rounded" name="email" type="text" class="form-control" value="{{$usuarios->email}}" required>
            </div>

            <div class="mb-3">
                <label for="admin" class="form-label">É Admin?</label>
                <select name="admin" class="form-select">
                    <option value="1" {{$usuarios->admin ? 'selected' : '' }}>Sim</option>
                    <option value="0" {{$usuarios->admin ? 'selected' : ''}}>Não</option>
                </select>
            </div>

            <button type= "submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('dashboard')}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection