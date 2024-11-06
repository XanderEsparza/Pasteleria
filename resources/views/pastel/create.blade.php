@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
<div class="container mt-4">
    <div class="center-box" style="background-color: #f7c5d5;">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('pastel.store') }}" method="POST" class="left-align-form">
                    @csrf
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"><br>
                    @if ($errors->has('nombre'))
                        <span class="error text-danger" for="input-nombre">{{$errors->first('nombre')}}</span>
                    @endif
                    <br>

                    <label for="tamano">Tamaño:</label><br>
                    <select name="tamano" id="tamano">
                        <option value="{{ old('tamano') }}">{{ old('tamano') }}</option>
                        <option value="Chico">Chico</option>
                        <option value="Mediano">Mediano</option>
                        <option value="Grande">Grande</option>
                    </select>
                    @if ($errors->has('tamano'))
                        <span class="error text-danger" for="input-tamano">{{$errors->first('tamano')}}</span>
                    @endif
                    <br>
    
                    <label for="sabor">Sabor:</label><br>
                    <input type="text" name="sabor" id="sabor" value="{{ old('sabor') }}"><br>
                    @if ($errors->has('sabor'))
                        <span class="error text-danger" for="input-sabor">{{$errors->first('sabor')}}</span>
                    @endif
                    <br>
    
                    <label for="pisos">Pisos:</label><br>
                    <input type="number" name="pisos" id="pisos" value="{{ old('pisos') }}"><br>
                    @if ($errors->has('pisos'))
                        <span class="error text-danger" for="input-pisos">{{$errors->first('pisos')}}</span>
                    @endif
                    <br>
    
                    <label for="precio">Precio:</label><br>
                    <input type="number" name="precio" id="precio" step="any" value="{{ old('precio') }}"><br>
                    @if ($errors->has('precio'))
                        <span class="error text-danger" for="input-precio">{{$errors->first('precio')}}</span>
                    @endif
                    <br>
    
                    <button type="submit" style="background-color: #ffedcc;">Añadir</button>
                    <br>
                    <a href="{{ route('pastel.index') }}">
                        Volver 
                    </a>                  
                </form>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/siuuuuu.png') }}" alt="Pastel" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</div>
@endsection