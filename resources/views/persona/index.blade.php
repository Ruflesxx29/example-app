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
                    <th scope="col">dni</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellidos</th>
                    <th scope="col">telefono</th>
                    <th scope="col">delete</th>
                    <th scope="col">edit</th>
                    <th scope="col">show</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personas as $persona)
                    <tr>
                        <td>
                            {{$persona ->id}}
                        </td>
                         <td> {{$persona->dni}}</td>
                        <td>
                            {{$persona->nombre}}
                        </td>
                        <td>
                             {{$persona->apellidos}}
                        </td>
                         <td> 
                             {{$persona->telefono}}
                         </td>
                        <td>
                            <a href="javascript: void(0);"
                                class = "deleteRow"
                                data-name="{{$persona->nombre}}"
                                data-url="{{ url('persona/' . $persona->id) }}">
                                delete
                            </a>
                        </td>
                        <td>
                            <a href="{{ url('persona/'. $persona->id .'/edit') }}">edit</a>
                        </td>
                        <td>
                            <a href="{{ url('persona/' . $persona->id) }}">show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
              
    </div>
    <div class="row">
        <a href="{{ url('persona/create') }}" class="btn btn-success">add persona</a>
    </div>
@endsection

@section('scripts')
<form action="" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
<script src="{{ url('assets/js/bikeindex.js') }}"></script>
@endsection