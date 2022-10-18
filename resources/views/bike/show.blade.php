@extends('app.base')

@section('content')
<div>
    <table class="table table-striped" id="biketable">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $bike->id }}</td>
            </tr>
            <tr>
                <td>NAME</td>
                <td>{{ $bike->name }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url('bike') }}" class="btn btn-primary">Volver</a>
</div>
@endsection