<!DOCTYPE html>
<html>
<head>
    <title>Subir Imagen</title>
</head>
<body>
    <h1>Subir Imagen</h1>

    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nombre">Nombre de la Imagen:</label>
        <input type="text" name="nombre" required>
        <br>
        <input type="file" name="image" required>
        <br>
        <button type="submit">Subir</button>
    </form>

    <a href="{{ route('images.index') }}">Volver a la galería</a>
</body>
</html>