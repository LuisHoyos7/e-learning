@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <header>
            <div class="row" style="border: 1px solid black; width:100%; padding:10px">

                <div class="col-sm-8 col-md-8 col-lg-8" style="border: 1px solid blue; width:100%">
                    <span class="title">{{ $course->name }}</span>
                    <p>{{ $course->description }}</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4" style="border: 1px solid red;width:100%">

                </div>
            </div>
        </header>
        <div class="row">

            <div>

            </div>
        </div>
    </div>
@endsection
