@extends('layouts.plantillaAdminForm')

@section('formulario')
    
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="{{ route('admin.hoteles.update', $hotel) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $hotel->nombre }}">
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $hotel->direccion }}">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                        <select class="form-control" name="categoria" id="categoria" placeholder="Ingrese la categoria">
                            @foreach($categorias as $categoria)
                                @if($categoria == $hotel->categoria)
                                    <option value="{{ $categoria }}" selected>{{ $categoria }}</option>
                                @else
                                    <option value="{{ $categoria }}">{{ $categoria }}</option>
                                @endif
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                        <label for="id_ciudad">Ciudad</label>
                            <select class="form-control" id="id_ciudad" name="id_ciudad">
                                @foreach($ciudades as $ciudad)
                                    @if($ciudad->id == $hotel->id_ciudad)
                                        <option value="{{ $ciudad->id }}" selected>{{ $ciudad->nombre }} </option>
                                    @else
                                        <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }} </option>
                                    @endif
                                @endforeach
                            </select>
                </div>
                <div class="form-group">
                    <label for="userfile">Imagen</label>
                        <div class="input-group mb-3">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="userfile">
                                            @foreach ($hotel->images as $imagen)
                                            <img class="img-fluid" width="200" src="/storage/{{ $imagen->path }}" alt="{{ $imagen->original_name }}">
                                            @endforeach
                                    </label> 
                                    <input type="file" class="custom-file-input" id="userfile" name="imagen[]" multiple>
                                </div>
                        </div>
                    
                    <img class="img-fluid mt-2" width="300" height="auto" src="/storage/img/hoteles/{{ $hotel->imagen }}" alt="{{ $hotel->imagen }}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="5">{{ $hotel->Descripcion }}</textarea> 
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                
                <input type="hidden" name="imagen" value="{{ $hotel->imagen }}">
            </form> 
        </div><!-- col -->
    </div><!-- row -->
@endsection