@extends('layouts.app')
@section('content')

    <h1>Faça o seu cadastro</h1>
        <form action="{{ route('criarUsuario') }}" method="post" class="form-control">
        @csrf
            <div>
                <label for="nome">
                    <input type="text" name="nome" placeholder="Nome:">
                </label>
            </div>

            <div>
                <label for="email">
                    <input type="text" name="email" placeholder="Email:">
                </label>
            </div>

            <div>
                <label for="password">
                    <input type="text" name="password" placeholder="Sua senha:">
                </label>
            </div>

            <div>
                <input class="btn btn-primary" type="submit" value="Criar usuário">
            </div>
        </form>
@endsection