@extends('app.base')

@section('content')
<div>
    <form action="{{ url('cancion') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input value="{{ old('titulo') }}" required type="text" minlength="3" maxlength="50" class="form-control" id="titulo" name="titulo" placeholder="titulo cancion">
            <label for="interprete">Interprete</label>
            <input value="{{ old('interprete') }}" required type="text" minlength="3" maxlength="50" class="form-control" id="interprete" name="interprete" placeholder="Interprete cancion">
            <label for="autor">Autor</label>
            <input value="{{ old('autor') }}" required type="text" minlength="3" maxlength="50" class="form-control" id="autor" name="autor" placeholder="autor cancion">
            <label for="duracion">Duración</label>
            <input value="{{ old('duracion') }}" required type="text" minlength="3" maxlength="5" class="form-control" id="duracion" name="duracion" placeholder="titulo cancion">
            <label for="genero">Genero</label>
            <input value="{{ old('genero') }}" required type="text" minlength="3" maxlength="50" class="form-control" id="genero" name="genero" placeholder="genero cancion">
            <label for="album">cancion album</label>
            <input value="{{ old('album') }}" required type="text" minlength="3" maxlength="50" class="form-control" id="album" name="album" placeholder="album">
            <label for="orden">cancion orden</label>
            <input value="{{ old('orden') }}" required type="text" minlength="1" maxlength="3" class="form-control" id="orden" name="orden" placeholder="orden">
            <label for="fechapublicacion">Fecha de publicacion</label>
            <input value="{{ old('fechapublicacion') }}" required type="text" minlength="3" maxlength="50" class="form-control" id="fechapublicacion" name="fechapublicacion" placeholder="fechapublicacion">
         
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">add</button>
        &nbsp;
        <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
    </form>
</div>
@endsection