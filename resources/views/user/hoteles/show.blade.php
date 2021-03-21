@extends('layouts.plantillaUsuario')

@section('titulo')
    <h1 class= "display-4 text-center mb-5">{{ $hotel->nombre }}</h1>
@endsection

@section('cuerpo')
    <div class="container">
        <button type="button" class="btn btn-dark btn-lg">
            <i class="fas fa-arrow-circle-left"></i>
            <a class="volver" href="{{ URL::previous() }}">Volver</a>
        </button>
            <div class="row my-3">
                    <div class="col-6 mx-auto">
                        <div class="card mb-5 animate__animated animate__bounceInRight">
                            @foreach ($hotel->images as $imagen)
                            <img class="card-img-top img-fluid" src="/storage/{{ $imagen->path }}" alt="{{ $imagen->original_name }}">
                            @endforeach
                                <div class="card-body">
                                        <p class="card-text"><small class="text-muted">{{ $hotel->categoria }}</small></p>
                                        <h3 class="card-title">{{ $hotel->nombre }}</h3>
                                        <p class="card-text">{{ $hotel->direccion }}</p>
                                        <p class="card-text text-justify">{{ $hotel->descripcion}}</p>
                                        <!-- A futuro ... <a href="/TP2-Turismo/admin/php/controllers/Hotel/mostrarHabitaciones.controller.php?id_hotel=<?php // echo $hotel->id_hotel?>"> VER HABITACION </a> -->
                                </div>
                        </div><!-- card -->
                    </div><!-- col -->
            </div><!-- row -->
</div><!-- container --> 
@endsection



