@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <p>Bem-vindo(a), {{ Auth::user()->nome }}!</p>
@endsection