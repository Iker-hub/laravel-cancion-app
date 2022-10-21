@extends('app.base')

@section('content')
<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            La bicicicleta no se ha guardado, por favor corrige los errores.
        </div>
        @error('update')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    @endif
    <form action="{{ url('bike/' . $bike->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nombre">Nombre bicicleta</label>
            <input value="{{ old('name', $bike->name) }}" required type="text" minlength="3" maxlength="50" class="form-control" id="name" name="name" placeholder="Nombre bicicleta">
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        &nbsp;
        <a href="{{ url('bike') }}" class="btn btn-primary">Volver</a>
        &nbsp;
        <form action="{{ url('bike/' . $bike->id) }}" method="put">
            @method('put')
            @csrf
            <input type="submit" class="btn btn-primary" value="Editar"/>
        </form>
    </form>
</div>
@endsection
