@extends('app.base')

@section('content')
    <div class="row" style="margin-top: 8px;">
    aquí va el contenido del index, por ejemplo, listado de bicicletas,
    desde el que se pueden editar, consultar y borrar las bicicletas
    y un enlace para crear bicicletas
    </div>
    <div class="row" style="margin-top: 8px;">
        <table class="table table-striped" id="bikeTable">
            <thead>
                <tr>
                    <th scope="col"># id</th>
                    <th scope="col">cancion</th>
                    <th scope="col">interprete</th>
                    <th scope="col">autor</th>
                    <th scope="col">duracion</th>
                    <th scope="col">genero</th>
                    <th scope="col">album</th>
                    <th scope="col">orden</th>
                    <th scope="col">publicacion</th>
                    <th scope="col">delete</th>
                    <th scope="col">edit</th>
                    <th scope="col">show</th>
                </tr>
            </thead>
            <tbody>
                @foreach($canciones as $cancion)
                    <tr>
                        <td>
                            {{$cancion ->id}}
                        </td>
                        <td>
                            {{$cancion->titulo}}
                        </td>
                         <td>
                            {{$cancion->interprete}}
                        </td>
                         <td>
                            {{$cancion->autor}}
                        </td>
                         <td>
                            {{$cancion->duracion}}
                        </td>
                         <td>
                            {{$cancion->genero}}
                        </td>
                         <td>
                            {{$cancion->album}}
                        </td>
                         <td>
                            {{$cancion->orden}}
                        </td>
                         <td>
                            {{$cancion->fechapublicacion}}
                        </td>
                        <td>
                            <a href="javascript: void(0);"
                                class = "deleteRow"
                                data-name="{{$cancion->titulo}}"
                                data-url="{{ url('cancion/' . $cancion->id) }}">
                                delete
                            </a>
                        </td>
                        <td>
                            <a href=" {{url('/cancion/'. $cancion->id .'/edit')}} ">edit</a>
                        </td>
                        <td>
                            <a href="{{url('/cancion/' . $cancion->id)}}">show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <a href="{{ url('/cancion/create') }}" class="btn btn-success">add cancion</a>
    </div>
@endsection

@section('scripts')
<form action="" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
<script src="{{ url('assets/js/bikeindex.js') }}"></script>
@endsection