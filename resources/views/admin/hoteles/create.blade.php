@extends('layouts.plantillaAdminForm')

@section('formulario')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="{{ route('admin.hoteles.store') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese un nombre">
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la direccion">
                </div>
            
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                        <select class="form-control" name="categoria" id="categoria" placeholder="Ingrese la categoria">
                            <option selected>Seleccione Orden</option>
                            <option value="*">1 Estrella</option>
                            <option value="**">2 Estrellas</option>
                            <option value="***">3 Estrellas</option>
                            <option value="****">4 Estrellas</option>
                            <option value="*****">5 Estrellas</option>
                        </select>
                </div> 
                <div class="form-group">
                        <label for="id_ciudad">Ciudad</label>
                            <select class="form-control" id="id_ciudad" name="id_ciudad">
                                    @foreach($ciudades as $c)
                                            <option value="{{ $c->id }}">{{ $c->nombre }}</option>                                    
                                    @endforeach
                            </select>
                </div> 
                <div class="form-group">
                    <label for="userfile">Imagen</label>
                    <input type="file" class="form-control" id="userfile" name="imagen[]" multiple>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div><!-- col -->
    </div><!-- row -->
@endsection