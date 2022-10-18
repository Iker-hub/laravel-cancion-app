@extends('app.base')

@section('content')
<div>
    <table class="table table-striped" id="canciontable">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $cancion->id }}</td>
            </tr>
            <tr>
                <td>TÍTULO</td>
                <td>{{ $cancion->titulo }}</td>
            </tr>
            <tr>
                <td>INTÉRPRETE</td>
                <td>{{ $cancion->interprete }}</td>
            </tr>
            <tr>
                <td>AUTOR</td>
                <td>{{ $cancion->autor }}</td>
            </tr>
            <tr>
                <td>DURACIÓN</td>
                <td>{{ $cancion->duracion }}</td>
                <tr>
                <td>GÉNERO</td>
                <td>{{ $cancion->genero }}</td>
            </tr>
            <tr>
                <td>ÁLBUM</td>
                <td>{{ $cancion->album }}</td>
            </tr>
            <tr>
                <td>ORDEN</td>
                <td>{{ $cancion->orden }}</td>
            </tr>
            <tr>
                <td>FECHA DE PUBLICACIÓN</td>
                <td>{{ $cancion->fechapublicacion }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ url('cancion') }}" class="btn btn-primary">Volver</a>
</div>
@endsection