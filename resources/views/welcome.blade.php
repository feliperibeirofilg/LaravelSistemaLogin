@extends('layouts.app')

@section('content')


    <h1>Faça o seu login:</h1>
    <form class='form-control' action="{{ route('logando') }}" method="Post">
        @csrf
        <div class="form-control">
            <label for="email">
                <input type="text" name="email" placeholder="Digite o seu email:">
            </label>
        </div>

        <div class="form-control">
            <label for="password">
                <input type="password" name="password" placeholder="Digite sua senha:">
            </label>
        </div>
        <div>
            <input class="btn btn-primary" type="submit" value="Login">
        </div>
    </form>

@endsection