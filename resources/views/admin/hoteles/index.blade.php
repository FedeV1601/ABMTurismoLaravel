@extends('layouts.plantillaAdminIndex')

@section('title', 'Hotel')

@section('boton')
    <div class="  col-4">
        <a href="{{ route('admin.hoteles.create') }}" class="btn btn-secondary"><i class="fas fa-plus-circle"></i>  Agregar Hotel</span></a></td>
    </div>
@endsection

@section('cuerpo')
    <table class="table table-bordered striped">
        <thead>
            <tr>
                <td>Hotel</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($hoteles as $hotel)
                <tr>
                    <td>{{ $hotel->nombre }}</td>
                    <td>
                        <a href="{{ route('admin.hoteles.edit' , $hotel) }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('admin.hoteles.destroy', $hotel) }}" method="post">
                            @csrf
                            @method('delete')
                           <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
@endsection

