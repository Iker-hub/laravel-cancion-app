@extends('app.base')

@section('content')
<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            La canción no se ha guardado, por favor corrige los errores.
        </div>
        @error('update')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    @endif
    <form action="{{ url('cancion/' . $cancion->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="titulo">Título</label>
            <input value="{{ old('titulo', $cancion->titulo) }}" required type="text" minlength="1" maxlength="80" class="form-control" id="titulo" name="titulo" placeholder="Título de la canción">
            @error('titulo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="interprete">Intérprete</label>
            <input value="{{ old('interprete', $cancion->interprete) }}" required type="text" minlength="1" maxlength="100" class="form-control" id="interprete" name="interprete" placeholder="Intérprete de la canción">
            @error('interprete')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input value="{{ old('autor', $cancion->autor) }}" type="text" minlength="1" maxlength="100" class="form-control" id="autor" name="autor" placeholder="Autor de la canción">
            @error('autor')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="duracion">Duración</label>
            <input value="{{ old('duracion', $cancion->duracion) }}" type="time" class="form-control" id="duracion" name="duracion">
            @error('duracion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="genero">Género</label>
            <input value="{{ old('genero', $cancion->genero) }}" required type="text" minlength="1" maxlength="20" class="form-control" id="genero" name="genero" placeholder="Género canción">
            @error('genero')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="album">Álbum</label>
            <input value="{{ old('album', $cancion->album) }}" type="text" minlength="1" maxlength="70" class="form-control" id="album" name="album" placeholder="Álbum de la canción">
            @error('album')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="orden">Orden</label>
            <input value="{{ old('orden', $cancion->orden) }}" type="number" min="1" max="30" class="form-control" id="orden" name="orden" placeholder="Orden de la canción">
            @error('orden')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="fechapublicacion">Fecha de publicación</label>
            <input value="{{ old('fechapublicacion', $cancion->fechapublicacion) }}" required type="date" class="form-control" id="fechapublicacion" name="fechapublicacion">
            @error('fechapublicacion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        &nbsp;
        <a href="{{ url('cancion') }}" class="btn btn-primary">Volver</a>
        &nbsp;
        <form action="{{ url('cancion/' . $cancion->id) }}" method="put">
            @method('put')
            @csrf
            <input type="submit" class="btn btn-primary" value="Editar"/>
        </form>
    </form>
</div>
@endsection
