@extends('app.base')

@section('content')
<div>
    aquí va el contenido de edit, se presenta el formulario con los campos
    que se han de introducir para editar una bicicleta
</div>
<div>
    <form action="{{ url('bike/' . $bike->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nombre">Bike name</label>
            <input value="{{ old('name', $bike->id) }}" required type="text" minlength="3" maxlength="50" class="form-control" id="name" name="name" placeholder="Bike name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">edit bike</button>
        &nbsp;
        <a href="{{ url('bike') }}" class="btn btn-primary">back</a>
        &nbsp;
        <a href="{{ url('bike/' . $bike->id) }}" class="btn btn-primary">view bike</a>
        &nbsp;
        <button type="submit" form="deleteForm" class="btn btn-primary">delete bike</button>
    </form>
    &nbsp;
    <form action="{{ url('bike/' . $bike->id) }}" method="post" id="deleteForm">
        @csrf
        @method('delete')
    </form>
</div>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection