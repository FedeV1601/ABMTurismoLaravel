@extends('layouts.plantillaUsuario')

@section('titulo')
  <h1 class= "display-4 text-center mb-3">Ciudades</h1>
@endsection


@section('cuerpo')
  <div class="container">
      <button type="button" class="btn btn-dark btn-lg">
              <i class="fas fa-arrow-circle-left"></i>
              <a class="volver" href="{{ URL::previous() }}">Volver</a>
      </button>
<div class="row my-3">
          <div class=" col-6 text-center ">
                <form action="{{ route('user.ciudades.index') }}" method="GET">
                @csrf  
                  <div class="input-group">
                    <select class="custom-select" name="orden">
                          <option value="asc" selected>Ordenar de forma Ascendente</option>
                          <option value="desc">Ordenar de forma Descendente</option>>
                      </select>
                      <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="submit">Ordenar</button>
                      </div>
                  </div> <!-- input -->
                </form>
          </div> <!-- col -->
          <div class=" col-6">
              <form class="form-inline my-2 my-lg-0 " method="GET" action="{{ route('user.ciudades.index') }}">
              @csrf
                <input class="form-control mr-2" type="search" name="busqueda"  placeholder="Buscar" aria-label="Buscar">
                  <input type="hidden" name="orden" value="asc"> 
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Buscar</button>
              </form>
          </div> <!-- col -->
        </div> <!-- row --> 
      <div class="row ">
        <div class="col-4">
            @foreach($ciudades as $ciudad)
              <div class="card mb-5">
                @foreach( $ciudad->images as $image)
                <img class="card-img-top" src="/storage/{{ $image->path }}" alt="{{ $image->original_name }}">
                  <div class="card-body">
                    <a href="/user/ciudades/show/{{ $ciudad->id }}"> <h3 class="card-title">{{ $ciudad->nombre }}</h3></a>
                  </div>
                  @endforeach
              </div>
            @endforeach
        </div> <!-- col -->
      </div> <!-- row -->

        <!-- PAGINAR -->
    
  </div> <!-- container -->
@endsection
