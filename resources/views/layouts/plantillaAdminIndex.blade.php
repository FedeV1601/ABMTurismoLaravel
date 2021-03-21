<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
      <div class="container">
        @include('partials.message')
        <button type="button" class="btn btn-dark btn-lg">
            <i class="fas fa-arrow-circle-left"></i> 
            <a class="volver" href="{{ URL::previous() }}">Volver</a>
        </button>
            <div class="row my-3">
              @yield('boton')
              <div class=" col-4 text-center ">
                <form action="{{ route('admin.ciudades.index') }}" method="GET">
                  @csrf
                  <div class="input-group">
                      <select class="custom-select" name="orden">
                          <option value="asc" selected>Ordenar de forma Ascendente</option>
                          <option value="desc">Ordenar de forma Descendente</option>
                      </select>
                      <div class="input-group-append">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ordenar</button>
                      </div>
                  </div>   
                </form>
              </div> <!-- col -->
              <div class=" col-4 text-right">
                <form class="form-inline my-2 my-lg-0 " method="GET" action="{{ route('admin.ciudades.index') }}">
                    <div class="input-group"> 
                        <input class="form-control mr-2" type="search" name="busqueda"  placeholder="Buscar" aria-label="Search">
                        <input type="hidden" name="orden" value="asc"> 
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Buscar</button>
                    </div>
                </form>
              </div><!-- col -->
            </div><!-- row -->
      <!-- PAGINACION -->
      @yield('cuerpo')
    </div><!-- container -->

    <div class="container">
      <div class="row text-center bg-light py-3 mt-2">
          <div class="col-4">Produccion Web</div>
          <div class="col-4">Carlos Federico Vazquez</div>
          <div class="col-4">Escuela Da Vinci</div>
      </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>