@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <x-commons.slider />
            @foreach ($course as $c)
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <x-commons.card :course="$c" />
                </div>

            @endforeach
        </div>
    </div> 

    <!--<course-component></course-component>-->
@endsection
