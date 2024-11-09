@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href={{ asset('css/edit.css') }}>
@endsection

@section('content')
<div class="container">
    <h1 class="titulo">EDITAR REGISTRO</h1>
    <!-- Formulario para edición en desktop -->
    <form action="{{ route('pastel.update', $pastel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table class="table-desktop">
          <tr>
            <th class="nombre">NOMBRE</th>
            <th class="tamano">TAMAÑO</th>
            <th class="sabor">SABOR</th>
            <th class="pisos">PISOS</th>
            <th class="precio">PRECIO</th>
            <th class="imagen">IMAGEN</th>
            <th class="acciones">ACCIONES</th>
          </tr>
          <tr>
            <td><input type="text" name="nombre" value="{{ old('nombre', $pastel->nombre) }}"></td>
            <td>
                <select name="tamano">
                    <option value="{{ $pastel->tamano }}">{{ $pastel->tamano }}</option>
                    <option value="Chico">Chico</option>
                    <option value="Mediano">Mediano</option>
                    <option value="Grande">Grande</option>
                </select>
            </td>
            <td><input type="text" name="sabor" value="{{ old('sabor', $pastel->sabor) }}"></td>
            <td><input type="number" name="pisos" value="{{ old('pisos', $pastel->pisos) }}"></td>
            <td><input type="number" name="precio" step="any" value="{{ old('precio', $pastel->precio) }}"></td>
            
            <!-- Campo para imagen -->
            <td>
                @if ($pastel->imagen)
                    <p>Imagen actual:</p>
                    <img src="{{ asset('storage/' . $pastel->imagen) }}" alt="Imagen del pastel" width="100px">
                @endif
                <input type="file" name="imagen">
                <small>Deja en blanco si no deseas cambiar la imagen.</small>
            </td>
            
            <td>
                <button type="submit" id="guardar" class="guardar">GUARDAR</button> 
                <a href="{{ route('pastel.index') }}"><button id="cancelar" class="cancelar" type="button">CANCELAR</button></a>
            </td>
          </tr>
        </table>
        <br>
        @if ($errors->has('nombre'))
            <span class="error text-danger">{{ $errors->first('nombre') }}</span>
        @endif
        @if ($errors->has('tamano'))
            <span class="error text-danger">{{ $errors->first('tamano') }}</span>
        @endif
        @if ($errors->has('sabor'))
            <span class="error text-danger">{{ $errors->first('sabor') }}</span>
        @endif
        @if ($errors->has('pisos'))
            <span class="error text-danger">{{ $errors->first('pisos') }}</span>
        @endif
        @if ($errors->has('precio'))
            <span class="error text-danger">{{ $errors->first('precio') }}</span>
        @endif
    </form>

    <!-- Formulario para edición en móvil -->
    <form action="{{ route('pastel.update', $pastel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="tableMovile">
            <div class="fila">
                <div class="columna">
                    <div class="header">NOMBRE</div>
                    <div class="contenido"><input type="text" name="nombre" value="{{ old('nombre', $pastel->nombre) }}"></div>
                </div>
            </div>

            <div class="fila">
                <div class="columna">
                    <div class="header">TAMAÑO</div>
                    <div class="contenido">
                        <select name="tamano">
                            <option value="{{ $pastel->tamano }}">{{ $pastel->tamano }}</option>
                            <option value="Chico">Chico</option>
                            <option value="Mediano">Mediano</option>
                            <option value="Grande">Grande</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="fila">
                <div class="columna">
                    <div class="header">SABOR</div>
                    <div class="contenido"><input type="text" name="sabor" value="{{ old('sabor', $pastel->sabor) }}"></div>
                </div>
            </div>

            <div class="fila">
                <div class="columna">
                    <div class="header">PISOS</div>
                    <div class="contenido"><input type="number" name="pisos" value="{{ old('pisos', $pastel->pisos) }}"></div>
                </div>
            </div>

            <div class="fila">
                <div class="columna">
                    <div class="header">PRECIO</div>
                    <div class="contenido"><input type="number" name="precio" value="{{ old('precio', $pastel->precio) }}"></div>
                </div>
            </div>

            <div class="fila">
                <div class="columna">
                    <div class="header">IMAGEN</div>
                    <div class="contenido">
                        @if ($pastel->imagen)
                            <p>Imagen actual:</p>
                            <img src="{{ asset('storage/' . $pastel->imagen) }}" alt="Imagen del pastel" width="100px">
                        @endif
                        <input type="file" name="imagen">
                        <small>Deja en blanco si no deseas cambiar la imagen.</small>
                    </div>
                </div>
            </div>

            <div class="fila">
                <div class="columna">
                    <div class="header">ACCIONES</div>
                    <div class="contenido">
                        <button type="submit" id="guardar" class="guardar">GUARDAR</button> 
                        <a href="{{ route('pastel.index') }}"><button id="cancelar" class="cancelar" type="button">CANCELAR</button></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        @if ($errors->has('nombre'))
            <span class="error text-danger">{{ $errors->first('nombre') }}</span>
        @endif
        @if ($errors->has('tamano'))
            <span class="error text-danger">{{ $errors->first('tamano') }}</span>
        @endif
        @if ($errors->has('sabor'))
            <span class="error text-danger">{{ $errors->first('sabor') }}</span>
        @endif
        @if ($errors->has('pisos'))
            <span class="error text-danger">{{ $errors->first('pisos') }}</span>
        @endif
        @if ($errors->has('precio'))
            <span class="error text-danger">{{ $errors->first('precio') }}</span>
        @endif
    </form>

</div>
@section('js')
    <script src="https://kit.fontawesome.com/c532f96cbc.js" crossorigin="anonymous"></script>
@endsection
@endsection
