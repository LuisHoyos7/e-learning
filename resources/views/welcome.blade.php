@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">

            @for ($i = 0; $i < 10; $i++)
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <x-commons.card class="" />
                </div>
            @endfor
        </div>
    </div>
@endsection
