@extends('layouts.plantillaAdminForm')

@section('ABM', '{{ route("admin.ciudades.index") }}')

@section('formulario')
    <div class="row mt-3">
        <div class="col-md-12">
            <form action="{{ route('admin.ciudades.store')}}" method="POST"  enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese un nombre">
                </div>
                <div class="form-group">
                    <label for="userfile">Imagen</label>
                    <input type="file" class="form-control" id="userfile" name="imagen">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div> <!-- col -->
    </div> <!-- row -->
@endsection
