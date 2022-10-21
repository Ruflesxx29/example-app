@extends('app.base')

@section('content')
<div>
  <div class="row" style="margin-top: 8px;">
        <table class="table table-striped" id="bikeTable">
            <tbody>
                <tr>
                    <td>
                        id 
                    </td>
                    <td>
                        {{$cancion->id}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Titulo 
                    </td>
                    <td>
                        {{$cancion->titulo}}
                    </td>
                </tr>
                <tr>
                    <td>
                        interprete 
                    </td>
                    <td>
                        {{$cancion->interprete}}
                    </td>
                </tr>
                <tr>
                    <td>
                        autor 
                    </td>
                    <td>
                        {{$cancion->autor}}
                    </td>
                </tr>
                <tr>
                    <td>
                        duracion 
                    </td>
                    <td>
                        {{$cancion->duracion}}
                    </td>
                </tr>
                <tr>
                    <td>
                        genero 
                    </td>
                    <td>
                        {{$cancion->genero}}
                    </td>
                </tr>
                <tr>
                    <td>
                        album 
                    </td>
                    <td>
                        {{$cancion->album}}
                    </td>
                </tr>
                <tr>
                    <td>
                        oden 
                    </td>
                    <td>
                        {{$cancion->orden}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Fecha de publicacion 
                    </td>
                    <td>
                        {{$cancion->fechapublicacion}}
                    </td>
                </tr>
                
            </tbody>
        </table>
    <br>
    <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
    &nbsp;
    <a href="{{ url('cancion/' . $cancion->id . '/edit') }}" class="btn btn-primary">edit cancion</a>
    &nbsp;
    <button form="deleteForm" type="submit" class="btn btn-primary">delete cancion</button>
</div>
<form action="{{ url('cancion/' . $cancion->id) }}" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection