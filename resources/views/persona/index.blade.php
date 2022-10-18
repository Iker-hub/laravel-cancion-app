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
        <p>¿Confirmar borrado <span id="deletePersona">XXX</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="" method="post" id="modalDeleteResourceForm">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-primary" value="Borrar persona"/>
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
                <th scope="col">DNI</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">BORRAR</th>
                <th scope="col">EDITAR</th>
                <th scope="col">VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personas as $persona)
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->dni }}</td>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->apellidos }}</td>
                    <td>{{ $persona->telefono }}</td>
                    <td><a href="javascript: void(0);"
                           class = "deleteRow"
                           data-name="{{ $persona->nombre }}"
                           data-url="{{ url('persona/'.$persona->id) }}"
                           data-toggle="modal"
                           data-target="#modalDelete">Borrar</a></td>
                    <td><a href="{{ url('persona/' . $persona->id . '/edit') }}">Editar</a></td>
                    <td><a href="{{ url('persona/' . $persona->id) }}">Ver</a></td>
                </tr>
            @endforeach()
        </tbody>
    </table>
</div>
<div class="row" style="margin-top: 8px;">
    <a href="{{ url('persona/create') }}" class="btn btn-primary">Añadir persona</a>
</div>
@endsection

@section('scripts')
<script src="{{ url('assets/js/persona-modal-delete.js') }}"></script>
@endsection