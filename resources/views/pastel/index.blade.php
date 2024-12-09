@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset(path: 'css/index.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
@endsection
@section('content')
<div class="spreen"> </div>
<div class="wave"> 
    <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="0.9" d="M0,128L26.7,117.3C53.3,107,107,85,160,101.3C213.3,117,267,171,320,170.7C373.3,171,427,117,480,122.7C533.3,128,587,192,640,197.3C693.3,203,747,149,800,117.3C853.3,85,907,75,960,85.3C1013.3,96,1067,128,1120,144C1173.3,160,1227,160,1280,154.7C1333.3,149,1387,139,1413,133.3L1440,128L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
</div>

<br><br>
<h1 class="m-a texto">Lista de Pasteles
</h1>
<!--Añadi un div-->
<div id="boton-agregar" >
    <a href="{{ route('pastel.create') }}" class=" button1">
        <span class="text">Añadir Pastel</span>
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
        </svg>
        
    </a>
</div>

<div class="cards-container">
    @forelse ($pasteles as $pastel)
        <div class="card">
            <div class="card-image">
                @if($pastel->imagen)
                    <img src="{{ asset('storage/'. $pastel->imagen) }}" alt="Imagen de {{ $pastel->nombre }}" loading="lazy">
                @else
                    <p>No image</p>
                @endif
            </div>
            <div class="card-content">
                <h3>{{ $pastel->nombre }}</h3>
                <p><strong>Tamaño:</strong> {{ $pastel->tamano }}</p>
                <p><strong>Sabor:</strong> {{ $pastel->sabor }}</p>
                <p><strong>Pisos:</strong> {{ $pastel->pisos }}</p>
                <p><strong>Precio:</strong> {{ $pastel->precio }}</p>
                <div class="card-actions">
                    <a href="{{ route('pastel.edit', $pastel->id) }}" class="edit-button">
                        <svg class="edit-svgIcon" viewBox="0 0 512 512">
                            <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                        </svg>
                    </a>
                    <form action="{{ route('pastel.destroy', $pastel->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="button" type="submit">
                            <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <p>No pasteles disponibles.</p>
    @endforelse
</div>

    
</table>

@section('js')
<script src="{{ asset('js/index.js') }}"></script>
<script src="https://kit.fontawesome.com/3a8bd5f476.js" crossorigin="anonymous"></script>

@endsection
<footer class="footer">
    <div class="social-links"> Nuestras redes sociales:
        <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-facebook"></i>
        </a>
        <a href="https://www.whatsapp.com" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</footer>

@endsection

