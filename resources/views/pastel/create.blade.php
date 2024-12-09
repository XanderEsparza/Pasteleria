@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
<div class="container mt-4">
    <div class="center-box">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('pastel.store') }}" method="POST" class="left-align-form">
                    @csrf
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
                    @if ($errors->has('nombre'))
                        <span class="error text-danger">{{$errors->first('nombre')}}</span>
                    @endif

                    <label for="tamano">Tamaño:</label>
                    <select name="tamano" id="tamano">
                        <option value="{{ old('tamano') }}">{{ old('tamano') }}</option>
                        <option value="Chico">Chico</option>
                        <option value="Mediano">Mediano</option>
                        <option value="Grande">Grande</option>
                    </select>
                    @if ($errors->has('tamano'))
                        <span class="error text-danger">{{$errors->first('tamano')}}</span>
                    @endif

                    <label for="sabor">Sabor:</label>
                    <input type="text" name="sabor" id="sabor" value="{{ old('sabor') }}">
                    @if ($errors->has('sabor'))
                        <span class="error text-danger">{{$errors->first('sabor')}}</span>
                    @endif

                    <label for="pisos">Pisos:</label>
                    <input type="number" name="pisos" id="pisos" value="{{ old('pisos') }}">
                    @if ($errors->has('pisos'))
                        <span class="error text-danger">{{$errors->first('pisos')}}</span>
                    @endif

                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" id="precio" step="any" value="{{ old('precio') }}">
                    @if ($errors->has('precio'))
                        <span class="error text-danger">{{$errors->first('precio')}}</span>
                    @endif
                    <br>

                    <label for="imagen">Imagen:</label><br>
                    <input type="file" name="imagen" id="imagen"><br>
                    @if ($errors->has('imagen'))
                        <span class="error text-danger" for="input-imagen">{{ $errors->first('imagen') }}</span>
                    @endif
                    <br>
    
                    <button type="submit" class="submit-button" style="background-color: #ffedcc;">Añadir</button>
                    <br>
                    <a href="{{ route('pastel.index') }}" class="back-link">
                        Volver 
                    </a>                  
                </form>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/siuuuuu.png') }}" alt="Pastel" class="responsive-image">
            </div>
        </div>
    </div>
</div>
@endsection
