@extends('app.base')

@section('content')
    <h3>editando la bicicleta {{ $name }} con el id {{ $id }}</h3>
    esta es la página en la que se recogen todos los datos de la
    bicicleta y se edita en la base de datos,
    si todo va bien se hace redirect a la <a href="{{ url('bike') }}">página index de bicicletas</a>
    y si falla algo se hace redirect a la <a href="{{ url()->previous() }}">página edit de bicicletas</a>
    <h3>esta es una de las rutas que no se visualiza y siempre finaliza con un redirect</h3>
@endsection