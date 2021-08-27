@extends('layouts.app')
@section('content')
    <div class="container">
        <header class='header-course'>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 neo-panel">
                    <div class="row">
                        <div class="col ">
                            <img src="{{ asset('logo/gth.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col text-center ">
                            <button class="center-block btn btn-gth-blue w-75">
                                Añadir a la cesta
                            </button>
                        </div>
                    </div>
                    <div class="row mt-1 mb-2">
                        <div class="col text-center">
                            <button class="btn btn-gth-blue w-75">Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-8 ">
                    <div class="mt-4">
                        <span class="title">{{ $course->name }}</span>
                        <p>{{ $course->description }}</p>
                        <p>Tiempo: {{ $course->duration }}</p>
                        <p>Creado por: </p>
                        <p>Valoracion: </p>
                        <p>Fecha de actualizacion: </p>
                    </div>
                </div>
            </div>
        </header>
        <div class="row mt-2">
            <div class="col-sm-10 col-md-10 col-lg-10 ">
                <h4>Lo que aprenderas</h4>
            </div>
        </div>
        <div class="row mt-4 block-center">
            <div class="col-sm-12 col-md-12 col-lg-12 ">
                <h1>Contenido de curso</h1>
                @php
                    $countUnit = 0;
                @endphp
                @foreach ($units as $unit)
                    @php
                        $countUnit = $countUnit + 1;
                    @endphp
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        #{{ $countUnit }} {{ $unit->name }}
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    @foreach ($unit->topics as $topic)
                                        {{ $topic->name }}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
