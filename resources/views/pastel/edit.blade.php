@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
@endsection

@section('content')

<div class="main-content">
    <div class="container">
        <h1 class="titulo">Editar Pastel</h1>
        
        <form action="{{ route('pastel.update', $pastel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $pastel->nombre) }}">
                @error('nombre')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="tamano">Tamaño</label>
                <select id="tamano" name="tamano">
                    <option value="Chico" {{ old('tamano', $pastel->tamano) == 'Chico' ? 'selected' : '' }}>Chico</option>
                    <option value="Mediano" {{ old('tamano', $pastel->tamano) == 'Mediano' ? 'selected' : '' }}>Mediano</option>
                    <option value="Grande" {{ old('tamano', $pastel->tamano) == 'Grande' ? 'selected' : '' }}>Grande</option>
                </select>
                @error('tamano')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="sabor">Sabor</label>
                <input type="text" id="sabor" name="sabor" value="{{ old('sabor', $pastel->sabor) }}">
                @error('sabor')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="pisos">Pisos</label>
                <input type="number" id="pisos" name="pisos" value="{{ old('pisos', $pastel->pisos) }}">
                @error('pisos')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" step="0.01" value="{{ old('precio', $pastel->precio) }}">
                @error('precio')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen">
                <small>Deja en blanco si no deseas cambiar la imagen.</small>
                @error('imagen')
                    <span class="error">{{ $message }}</span>
                @enderror
                @if ($pastel->imagen)
                    <div class="image-preview">
                        <p>Imagen actual:</p>
                        <img src="{{ asset('storage/' . $pastel->imagen) }}" alt="Imagen del pastel">
                    </div>
                @endif
            </div>

            <div class="actions">
                <button type="submit" class="btn btn-guardar">Guardar Cambios</button>
                <a href="{{ route('pastel.index') }}" class="btn btn-cancelar">Cancelar</a>
            </div>
        </form>
    </div>
</div>

@endsection

@section('js')
    <script src="https://kit.fontawesome.com/c532f96cbc.js" crossorigin="anonymous"></script>
@endsection

