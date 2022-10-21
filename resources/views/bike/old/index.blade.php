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
                    <th scope="col">bike</th>
                    <th scope="col">delete</th>
                    <th scope="col">edit</th>
                    <th scope="col">show</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bikes as $bike)
                    <tr>
                        <td>
                            {{$bike ->id}}
                        </td>
                        <td>
                            {{$bike->name}}
                        </td>
                        <td>
                            <a href="javascript: void(0);"
                                class = "deleteRow"
                                data-name="{{$bike->name}}"
                                data-url="{{ url('bike/' . $bike->id) }}">
                                delete
                            </a>
                        </td>
                        <td>
                            <a href="{{ url('bike/. $bike->id ./edit') }}">edit</a>
                        </td>
                        <td>
                            <a href="{{ url('bike/ . $bike->id') }}">show</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <a href="{{ url('bike/create') }}" class="btn btn-success">add bike</a>
    </div>
@endsection

@section('scripts')
<form action="" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
<script src="{{ url('assets/js/bikeindex.js') }}"></script>
@endsection