@extends('app.base')

@section('content')
<div>
    <table class="table table-striped" id="personatable">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $persona->id }}</td>
            </tr>
            <tr>
                <td>DNI</td>
                <td>{{ $persona->dni }}</td>
            </tr>
            <tr>
                <td>NOMBRE</td>
                <td>{{ $persona->nombre }}</td>
            </tr>
            <tr>
                <td>APELLIDOS</td>
                <td>{{ $persona->apellidos }}</td>
            </tr>
            <tr>
                <td>TELEFONO</td>
                <td>{{ $persona->telefono }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url('persona') }}" class="btn btn-primary">Volver</a>
</div>
@endsection