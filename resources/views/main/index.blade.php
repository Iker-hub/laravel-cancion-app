@extends('app.base')

@section('content')
<div class="row">
    <a href="{{ url('bike') }}" class="btn btn-success">Bicicletas</a>
    &nbsp;&nbsp;&nbsp;
    <a href="{{ url('persona') }}" class="btn btn-success">Personas</a>
    &nbsp;&nbsp;&nbsp;
    <a href="{{ url('cancion') }}" class="btn btn-success">Canciones</a>
</div>
@endsection