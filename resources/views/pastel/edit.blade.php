@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href={{ asset('css/edit.css') }}>
@endsection
    
@section('content')
<div class="container">
    <h1 class="titulo">EDITAR REGISTRO</h1>
    <form action="{{ route('pastel.update', $pastel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table class="table-desktop">
          <tr>
            <th class="nombre">NOMBRE</th>
            <th class="tamano">TAMAÑO</th>
            <th class="sabor">SABOR</th>
            <th class="pisos">PISOS</th>
            <th class="precio">PRECIO</th>
            <th class="acciones">ACCIONES</th>
          </tr>
          <tr>
            <td class=""><input class="" type="text" name="nombre" id="" value="{{ $pastel->nombre }}">
            </td>
            
            <td class="">
                <select name="tamano" id="">
                    <option value="{{ $pastel->tamano }}">{{ $pastel->tamano }}</option>
                    <option value="Chico">Chico</option>
                    <option value="Mediano">Mediano</option>
                    <option value="Grande">Grande</option>
                </select>
            </td>
            <td class=""><input class="" type="text" name="sabor" id="" value="{{ $pastel->sabor }}"></td>
            <td class=""><input class="" type="number" name="pisos" id="" value="{{ $pastel->pisos }}"></td>
            <td class=""><input class="" type="number" name="precio" step="any" id="" value="{{ $pastel->precio }}"></td>
            <td class="">
                <button type="submit" id="guardar" class="guardar">GUARDAR</button> <a href="{{ route('pastel.index') }}"><button id="cancelar" class="cancelar">CANCELAR</button></td>
          </tr>          
        </table><br>
        @if ($errors->has('nombre'))
            <span class="error text-danger" for="input-nombre">{{$errors->first('nombre')}}</span>
        @endif
        <br>
        @if ($errors->has('tamano'))
            <span class="error text-danger" for="input-tamano">{{$errors->first('tamano')}}</span>
        @endif
        <br>
        @if ($errors->has('sabor'))
            <span class="error text-danger" for="input-sabor">{{$errors->first('sabor')}}</span>
        @endif
        <br>
        @if ($errors->has('pisos'))
            <span class="error text-danger" for="input-pisos">{{$errors->first('pisos')}}</span>
        @endif
        <br>
        @if ($errors->has('precio'))
            <span class="error text-danger" for="input-precio">{{$errors->first('precio')}}</span>
        @endif
    </form>

    <form action="{{ route('pastel.update', $pastel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="tableMovile">
          <div class="fila">
            <div class="columna">
              <div class="header">NOMBRE</div>
              <div class="contenido"><input class="" type="text" name="nombre" id="" value="{{ $pastel->nombre }}"></div>
            </div>
          </div>

          <div class="fila">
            <div class="columna">
              <div class="header">TAMAÑO</div>
              <div class="contenido"><select name="tamano" id="">
                    <option value="{{ $pastel->tamano }}">{{ $pastel->tamano }}</option>
                    <option value="Chico">Chico</option>
                    <option value="Mediano">Mediano</option>
                    <option value="Grande">Grande</option>
                </select></div>
            </div>
          </div>

          <div class="fila">
            <div class="columna">
              <div class="header">SABOR</div>
              <div class="contenido"><input class="" type="text" name="sabor" id="" value="{{ $pastel->sabor }}"></div>
            </div>
          </div>

          <div class="fila">
            <div class="columna">
              <div class="header">PISOS</div>
              <div class="contenido"><input class="" type="number" name="pisos" id="" value="{{ $pastel->pisos }}"></div>
            </div>
          </div>

          <div class="fila">
            <div class="columna">
              <div class="header">PRECIO</div>
              <div class="contenido"><input class="" type="number" name="precio" id="" value="{{ $pastel->precio }}"></div>
            </div>
          </div>

          <div class="fila">
            <div class="columna">
              <div class="header">ACCIONES</div>
              <div class="contenido"><button type="submit" id="guardar" class="guardar">GUARDAR</button> <a href="{{ route('pastel.index') }}"><button id="cancelar" class="cancelar">CANCELAR</button></a></div>
            </div>
          </div>
        </div>
        <br>
        @if ($errors->has('nombre'))
            <span class="error text-danger" for="input-nombre">{{$errors->first('nombre')}}</span>
        @endif
        <br>
        @if ($errors->has('tamano'))
            <span class="error text-danger" for="input-tamano">{{$errors->first('tamano')}}</span>
        @endif
        <br>
        @if ($errors->has('sabor'))
            <span class="error text-danger" for="input-sabor">{{$errors->first('sabor')}}</span>
        @endif
        <br>
        @if ($errors->has('pisos'))
            <span class="error text-danger" for="input-pisos">{{$errors->first('pisos')}}</span>
        @endif
        <br>
        @if ($errors->has('precio'))
            <span class="error text-danger" for="input-precio">{{$errors->first('precio')}}</span>
        @endif
    </form>

</div>
@section('js')
    <script src="https://kit.fontawesome.com/c532f96cbc.js" crossorigin="anonymous"></script>
@endsection
@endsection