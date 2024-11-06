@extends('layouts.app')

@section('css')
        <link rel="stylesheet" href="{{ asset('css/principal.css') }}" />    
@endsection

@section('content')
    <h1>¡BIENVENIDO!</h1>
    <a href="{{ route('pastel.index') }}" class="btn btn-info">Entrar</a>

@endsection