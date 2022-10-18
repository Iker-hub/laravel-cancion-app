@extends('app.base')

@section('content')
<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            La persona no se ha guardado, por favor corrige los errores.
        </div>
        @error('update')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    @endif
    <form action="{{ url('persona/' . $persona->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="dni">Dni persona</label>
            <input value="{{ old('dni', $persona->dni) }}" required type="text" minlength="3" maxlength="10" class="form-control" id="dni" name="dni" placeholder="Dni persona">
            @error('dni')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nombre">Nombre persona</label>
            <input value="{{ old('nombre', $persona->nombre) }}" required type="text" minlength="3" maxlength="30" class="form-control" id="nombre" name="nombre" placeholder="Nombre persona">
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos persona</label>
            <input value="{{ old('apellidos', $persona->apellidos) }}" required type="text" minlength="3" maxlength="60" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos persona">
            @error('apellidos')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="telefono">Telefono persona</label>
            <input value="{{ old('telefono', $persona->telefono) }}" required type="text" minlength="3" maxlength="15" class="form-control" id="telefono" name="telefono" placeholder="Telefono persona">
            @error('telefono')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        &nbsp;
        <a href="{{ url('persona') }}" class="btn btn-primary">Volver</a>
        &nbsp;
        <form action="{{ url('persona/' . $persona->id) }}" method="put">
            @method('put')
            @csrf
            <input type="submit" class="btn btn-primary" value="Editar"/>
        </form>
    </form>
</div>
@endsection