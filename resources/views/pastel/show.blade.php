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

<a href="{{ route('pastel.index') }}" class="btn btn-info">Volver</a>