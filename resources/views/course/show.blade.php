@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <header class='header-course'>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 neo-panel ">
                    <div class="row">
                        <div class="col ">

                            <img src="{{ asset('logo/gth.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col text-center ">
                            <button class="center-block btn btn-gth-blue w-75">Añadir a la
                                cesta</button>
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
        <div class="row mt-5 block-center">
            <div class="col"></div>
            <div class="col-sm-10 col-md-10 col-lg-10 ">
                <h5>Lo que aprenderas</h5>
            </div>
            <div class="col"></div>
        </div>
        <div class="row mt-5 block-center">
            <div class="col"></div>
            <div class="col-sm-10 col-md-10 col-lg-10 ">
                <section>
                    <article>
                        <h1>Contenido de curso</h1>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Unidad 1 Nombre unidad
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        lista clases
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Unidad #2 Nombre unidad
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        lista clases
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Unidad #3 Nombre unidad
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lista unidad
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
