@extends('main.index')

@section('modalContent')
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmar borrado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>¿Confirmar borrado <span id="deleteCancion">XXX</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="" method="post" id="modalDeleteResourceForm">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-primary" value="Borrar cancion"/>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
{{-- @parent --}}
<div class="row" style="margin-top: 8px;">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TÍTULO</th>
                <th scope="col">INTÉRPRETE</th>
                <th scope="col">AUTOR</th>
                <th scope="col">DURACIÓN</th>
                <th scope="col">GÉNERO</th>
                <th scope="col">ÁLBUM</th>
                <th scope="col">ORDEN</th>
                <th scope="col">FECHA DE PUBLICACIÓN</th>
                <th scope="col">BORRAR</th>
                <th scope="col">EDITAR</th>
                <th scope="col">VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach($canciones as $cancion)
                <tr>
                    <td>{{ $cancion->id }}</td>
                    <td>{{ $cancion->titulo }}</td>
                    <td>{{ $cancion->interprete }}</td>
                    <td>{{ $cancion->autor }}</td>
                    <td>{{ $cancion->duracion }}</td>
                    <td>{{ $cancion->genero }}</td>
                    <td>{{ $cancion->album }}</td>
                    <td>{{ $cancion->orden }}</td>
                    <td>{{ $cancion->fechapublicacion }}</td>
                    <td><a href="javascript: void(0);"
                           class = "deleteRow"
                           data-name="{{ $cancion->titulo }}"
                           data-url="{{ url('cancion/'.$cancion->id) }}"
                           data-toggle="modal"
                           data-target="#modalDelete">Borrar</a></td>
                    <td><a href="{{ url('cancion/' . $cancion->id . '/edit') }}">Editar</a></td>
                    <td><a href="{{ url('cancion/' . $cancion->id) }}">Ver</a></td>
                </tr>
            @endforeach()
        </tbody>
    </table>
</div>
<div class="row" style="margin-top: 8px;">
    <a href="{{ url('cancion/create') }}" class="btn btn-primary">Añadir canción</a>
</div>
@endsection

@section('scripts')
<script src="{{ url('assets/js/cancion-modal-delete.js') }}"></script>
@endsection