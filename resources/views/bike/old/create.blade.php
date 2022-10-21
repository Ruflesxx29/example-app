@extends('app.base')

@section('content')
<div>
    <form action="{{ url('bike') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Bike name</label>
            <input value="{{ old('name') }}" required type="text" minlength="3" maxlength="50" class="form-control" id="name" name="name" placeholder="Bike name">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">add</button>
        &nbsp;
        <a href="{{ url('bike') }}" class="btn btn-primary">back</a>
    </form>
</div>
@endsection