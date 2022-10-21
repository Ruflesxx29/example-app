@extends('app.base')

@section('content')
<div>
    aquí va el contenido de edit, se presenta el formulario con los campos
    que se han de introducir para editar una bicicleta
</div>
<div>
    <form action="{{ url('persona/' . $persona->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nombre">persona name</label>
            <input value="{{ old('nombre', $persona->id) }}" required type="text" minlength="3" maxlength="50" class="form-control" id="name" name="name" placeholder="persona name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">edit persona</button>
        &nbsp;
        <a href="{{ url('persona') }}" class="btn btn-primary">back</a>
        &nbsp;
        <a href="{{ url('persona/' . $persona->id) }}" class="btn btn-primary">view persona</a>
        &nbsp;
        <button type="submit" form="deleteForm" class="btn btn-primary">delete persona</button>
    </form>
    &nbsp;
    <form action="{{ url('persona/' . $persona->id) }}" method="post" id="deleteForm">
        @csrf
        @method('delete')
    </form>
</div>
@endsection

@section('scripts')
<script src="{{ url('assets/js/personaedit.js') }}"></script>
@endsection