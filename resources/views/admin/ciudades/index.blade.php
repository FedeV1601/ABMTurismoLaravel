@extends('layouts.plantillaAdminIndex')

@section('title', 'Ciudad')



@section('boton')
    <div class="  col-4">
      <a href="{{ route('admin.ciudades.create') }}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i>  Agregar Ciudad</span></a></td>
    </div>
@endsection

@section('cuerpo')

    <table class="table table-bordered striped">
        <thead>
            <tr>
                <td>Ciudad</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($ciudades as $ciudad)
                <tr>
                    <td>{{ $ciudad->nombre }}</td>
                    <td>
                        <a href="{{ route('admin.ciudades.edit', $ciudad) }}" class="btn btn-danger"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('admin.ciudades.destroy', $ciudad) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        
        </tbody>
    </table>

@endsection