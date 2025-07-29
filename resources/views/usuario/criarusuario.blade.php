@extends('layouts.app')
@section('content')

    <h1>Faça o seu cadastro</h1>
        <form action="{{ route('criarUsuario') }}" method="post" class="form-control">
        @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">
                    <input type="text" name="nome" placeholder="Nome:">
                </label>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">
                    <input type="text" name="email" placeholder="Email:">
                </label>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">
                    <input type="text" name="password" placeholder="Sua senha:">
                </label>
            </div>

            <div class="mb-3" >
                <input class="btn btn-primary" type="submit" value="Criar usuário">
            </div>
        </form>
@endsection