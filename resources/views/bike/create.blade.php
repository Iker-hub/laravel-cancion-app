@extends('app.base')

@section('content')
<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            La bicicicleta no se ha guardado, por favor corrige los errores.
        </div>
        @error('store')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    @endif
    <form action="{{ url('bike') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nombre bicicleta</label>
            <input value="{{ old('name') }}" required type="text" minlength="3" maxlength="50" class="form-control" id="name" name="name" placeholder="Nombre bicicleta">
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        &nbsp;
        <a href="{{ url('bike') }}" class="btn btn-primary">Volver</a>
        &nbsp;
        <form action="{{ url('bike') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-primary" value="Añadir"/>
        </form>
    </form>
</div>
@endsection