@extends('layouts.plantillaAdminForm')

@section('ABM', "'admin.ciudades.index'" )

@section('formulario')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="{{route('admin.ciudades.update', $ciudad)}}" method="POST"  enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $ciudad->nombre }}">
                </div>
                <div class="form-group">
                    <label for="userfile">Imagen</label>
                        <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imagen" name="imagen" aria-describedby="userfile">
                                    <label class="custom-file-label" for="imagen">{{ $ciudad->image }}</label>
                                </div>
                        </div>
                </div>
                @foreach ($ciudad->images as $imagen)
                <img class="img-fluid my-2" width="300" height="auto" src="/storage/{{ $imagen->path }}" alt="{{ $imagen->original_name }}">
                @endforeach
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div> <!-- col -->
    </div> <!-- row -->
@endsection
 