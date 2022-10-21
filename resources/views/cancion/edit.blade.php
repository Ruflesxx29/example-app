@extends('app.base')

@section('content')
<div>
    aquí va el contenido de edit, se presenta el formulario con los campos
    que se han de introducir para editar una bicicleta
</div>
<br>
<div>
    <form action="{{ url('cancion/' . $cancion->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input value="{{ old('titulo', $cancion->id) }}" required type="text" minlength="3" maxlength="50" class="form-control" id="titulo" name="titulo" placeholder="titulo cancion">
            <label for="interprete">Interprete</label>
            <input value="{{ old('interprete', $cancion->interprete) }}" required type="text" minlength="3" maxlength="50" class="form-control" id="interprete" name="interprete" placeholder="Interprete cancion">
            <label for="autor">Autor</label>
            <input value="{{ old('autor', $cancion->autor) }}" required type="text" minlength="3" maxlength="50" class="form-control" id="autor" name="autor" placeholder="autor cancion">
            <label for="duracion">Duración</label>
            <input value="{{ old('duracion', $cancion->duracion) }}" required type="text" minlength="3" maxlength="5" class="form-control" id="duracion" name="duracion" placeholder="titulo cancion">
            <label for="genero">Genero</label>
            <input value="{{ old('genero', $cancion->genero) }}" required type="text" minlength="3" maxlength="50" class="form-control" id="genero" name="genero" placeholder="genero cancion">
            <label for="album">cancion album</label>
            <input value="{{ old('album', $cancion->album) }}" required type="text" minlength="3" maxlength="50" class="form-control" id="album" name="album" placeholder="album">
            <label for="orden">cancion orden</label>
            <input value="{{ old('orden', $cancion->orden) }}" required type="text" minlength="1" maxlength="50" class="form-control" id="orden" name="orden" placeholder="orden">
            <label for="fechapublicacion">cancion fechapublicacion</label>
            <input value="{{ old('fechapublicacion', $cancion->fechapublicacion) }}" required type="text" minlength="3" maxlength="50" class="form-control" id="fechapublicacion" name="fechapublicacion" placeholder="fechapublicacion">
            
            @error('titulo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">edit cancion</button>
        &nbsp;
        <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
        &nbsp;
        <a href="{{ url('cancion/' . $cancion->id) }}" class="btn btn-primary">view cancion</a>
        &nbsp;
        <button type="submit" form="deleteForm" class="btn btn-primary">delete cancion</button>
    </form>
    &nbsp;
    <form action="{{ url('cancion/' . $cancion->id) }}" method="post" id="deleteForm">
        @csrf
        @method('delete')
    </form>
</div>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection

