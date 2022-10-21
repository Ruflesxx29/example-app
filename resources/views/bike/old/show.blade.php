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
                        {{$bike->id}}
                    </td>
                </tr>
                <tr>
                    <td>
                        name 
                    </td>
                    <td>
                        {{$bike->name}}
                    </td>
                </tr>
                
            </tbody>
        </table>
    <br>
    <a href="{{ url('bike') }}" class="btn btn-primary">back</a>
    &nbsp;
    <a href="{{ url('bike/' . $bike->id . '/edit') }}" class="btn btn-primary">edit bike</a>
    &nbsp;
    <button form="deleteForm" type="submit" class="btn btn-primary">delete bike</button>
</div>
<form action="{{ url('bike/' . $bike->id) }}" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection