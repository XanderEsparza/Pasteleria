<h3>Pastel {{$pastel->nombre}}</h3>
<br>
<h4>Tamaño: {{$pastel->tamano}}</h4>
<br>
<h4>Sabor: {{$pastel->sabor}}</h4>
<br>
<h4>Pisos: {{$pastel->pisos}}</h4>
<br>
<h4>Precio: {{$pastel->precio}}</h4>
<br>
<div style="margin-bottom: 20px;">
    <strong>Imagen:</strong>
    <br>
    @if($pastel->imagen)
        <img src="{{ route('pastel.mostrarImagen', $pastel->id) }}" alt="Imagen de {{ $pastel->nombre }}" style="max-width: 300px; height: auto; margin-top: 10px;">
    @else
        <p>No se ha subido ninguna imagen para este pastel.</p>
    @endif
</div>

<a href="{{ route('pastel.index') }}" class="btn btn-info">Volver</a>