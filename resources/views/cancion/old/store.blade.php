@extends('app.base')

@section('content')
<div>
    <h3>creando la bicicleta {{ $name }}</h3>
    esta es la página en la que se recogen todos los datos de la
    bicicleta y se inserta en la base de datos,
    si todo va bien se hace redirect a la <a href="{{ url('cancion') }}">página index de bicicletas</a>
    y si falla algo se hace redirect a la <a href="{{ url('cancion/create') }}">página create de bicicletas</a>
    <h3>esta es una de las rutas que no se visualiza y siempre finaliza con un redirect</h3>
</div>
@endsection