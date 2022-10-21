@extends('app.base')

@section('content')
<div>
  <div class="row" style="margin-top: 8px;">
        <table class="table table-striped" id="personaTable">
            <tbody>
                <tr>
                    <td>
                        id 
                    </td>
                    <td>
                        {{$persona->id}}
                    </td>
                </tr>
                <tr>
                    <td>
                        name 
                    </td>
                    <td>
                        {{$persona->nombre}}
                    </td>
                </tr>
                
            </tbody>
        </table>
    <br>
    <a href="{{ url('persona') }}" class="btn btn-primary">back</a>
    &nbsp;
    <a href="{{ url('persona/' . $persona->id . '/edit') }}" class="btn btn-primary">edit persona</a>
    &nbsp;
    <button form="deleteForm" type="submit" class="btn btn-primary">delete persona</button>
</div>
<form action=" {{ url('persona/' . $persona->id) }}" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
@endsection

@section('scripts')
<script src="{{ url('assets/js/personaedit.js') }}"></script>
@endsection