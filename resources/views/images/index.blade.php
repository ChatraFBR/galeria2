<!DOCTYPE html>
<html>
<head>
    <title>Galería de Imágenes</title>
</head>
<body>
    <h1>Galería de Imágenes</h1>
    <a href="{{ route('images.create') }}">Subir Imagen</a>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <div>
        @foreach($images as $image)
            <div>
                <h3>{{ $image->nombre }}</h3>
                <img src="{{ asset('images/' . $image->nombre_original) }}" alt="{{ $image->nombre }}" style="width: 200px; height: auto;">
            </div>
        @endforeach
    </div>
</body>
</html>