@extends('layouts.plantillaUsuario')

@section('titulo')
  <h1 class= " display-4 text-center mb-3">Hoteles</h1>
@endsection

@section('cuerpo')
  <div class="container">
      <button type="button" class="btn btn-dark btn-lg mb-3">
          <i class="fas fa-arrow-circle-left"></i> 
          <a class="volver" href="{{ URL::previous() }}">Volver</a>
        </button>
        <div class="row my-3">
            <div class="col-6 text-center ">
              <form action="/hoteles/index/{id}" method="GET">
              @csrf
                  <div class="input-group mb-4">
                    <select class="custom-select" name="orden">
                        <option value="asc" selected>Ordenar de forma Ascendente</option>
                        <option value="desc">Ordenar de forma Descendente</option>
                    </select>
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="submit">Ordenar</button>
                    </div>
                  </div> 
              </form>
          </div><!--col-->
            <div class=" col-6">
                <form class="form-inline my-2 my-lg-0 " method="GET" action="/TP2-Turismo/admin/php/controllers/Hotel/mostrarHoteles.controller.php">
                    @csrf
                    <input class="form-control mr-2" type="search" name="busqueda"  placeholder="Buscar" aria-label="Buscar">
                    <input type="hidden" name="orden" value="asc"> 
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Buscar</button>
                </form>
            </div><!--col-->
        </div>  <!--row-->
        <div class="row">
          <div class="col-4">
            @if($hoteles != null)
             @foreach($hoteles as $hotel)
              <div class="card mb-5">
                @foreach ($hotel->images as $imagen)
                  <img class="card-img-top img-fluid" src="/storage/{{ $imagen->path }}" alt="{{ $imagen->original_name }}">
                @endforeach
                
                  <div class="card-body">
                    <p class="card-text"><small class="text-muted"> {{ $hotel->categoria }}</small></p>
                    <a href="/user/hoteles/show/{{ $hotel->id }}"> <h3 class="card-title">{{ $hotel->nombre }}</h3></a>
                  </div>
              </div>
             @endforeach
          </div><!--col-->
          @else
            {{"<h3>Disculpe. No hay hoteles disponibles en esta Ciudad</h3>"}}
          @endif
      </div> <!--row-->
        <!-- PAGINACION -->
  </div> <!--container-->
    
@endsection





