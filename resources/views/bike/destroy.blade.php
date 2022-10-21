@extends('app.base')

@section('content')
<div>
    <h3>borrando la bicicleta número {{ $id }}</h3>
    esta es la página en la que se elimina la bicicleta de la base de datos,
    se hace redirect a la <a href="{{ url('bike') }}">página index de bicicletas</a>
    se agrega además un mensaje para que sea mostrado en la página de destino informando
    acerca del resultado de la operación de borrar una bicicleta
    <h3>esta es una de las rutas que no se visualiza y siempre finaliza con un redirect</h3>
</div>
@endsection