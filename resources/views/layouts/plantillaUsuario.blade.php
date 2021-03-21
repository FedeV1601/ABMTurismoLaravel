<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- CSS de autor -->
    <link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

    <title>TP Turismo</title>
  </head>
  <body class="fondoBody">
       <div class="container">
            <div class="text-center">
              <img src="/storage/img/portada/turismo.png" class="img-fluid" width="300" height="150" alt="Turismo Login">
            </div>
          <div class="row">
            <div class="col-12">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="{{ route('user.ciudades.index') }}">Turismo TP</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                      <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                          <?php if(!isset($_SESSION['auth']) || !$_SESSION['auth'] ): ?>
                                <li class="nav-item active">
                                  <a class="nav-link" href="{{route('user.ciudades.index')}}">Navegar el Sitio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="{{route('admin.ciudades.index')}}"> Editar Ciudades</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="{{route('admin.hoteles.index')}}">Editar Hoteles</a>
                                </li>
                          <?php else : ?>
                                <li class="nav-item active">
                                  <a class="nav-link" href="{{route('user.ciudades.index')}}">Navegar el Sitio <span class="sr-only">(current)</span></a>
                                  </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{route('admin.ciudades.index')}}"> Editar Ciudades</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{route('admin.hoteles.index')}}">Editar Hoteles</a>
                              </li>
                                <li class="nav-item">
                                <a class="nav-link" href="/logout">Logout</a>
                              </li>
                          <?php endif;?>
                        </ul>
                      </div>
                </nav>
            </div><!--col-->
          </div><!--row-->
          
          @yield('titulo')
         
        </div><!--container-->

        
        <!-- CUERPO -->
        @yield('bienvenido')


        @yield('cuerpo')


        <div class="container">
            <div class="row text-center bg-light py-3 mt-2">
                <div class="col-4">Produccion Web</div>
                <div class="col-4">Carlos Federico Vazquez</div>
                <div class="col-4">Escuela Da Vinci</div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  
    </body>
</html>