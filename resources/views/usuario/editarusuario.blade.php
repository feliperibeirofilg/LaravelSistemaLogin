@extends('layouts.app')
@section('content')

    <div class="container">
        <h2>Editar Usuários</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    

        <form action="{{ route('usuario.atualizar', $usuarios->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome"type="text" class="form-control" value="{{$usuarios->nome}}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" value="{{$usuarios->email}}" required>
            </div>

            <div class="mb-3">
                <label for="admin" class="form-label">É Admin?</label>
                <select name="admin" class="form-select" >
                    <option value="1" {{$usuarios->admin ? 'selected' : '' }}>Sim</option>
                    <option value="0" {{$usuarios->admin ? 'selected' : ''}}>Não</option>
                </select>
            </div>

            <button type= "submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('dashboard')}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection