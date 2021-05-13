@extends('layouts.metronic.index')

@section('title', 'Listado de Grupos')

@section('breadcrumb')
    <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
    <a class="text-white text-hover-white opacity-75 hover-opacity-100 active"
        href="{{ route('group.index') }}">Grupos/editar</a>
@endsection

@section('content')
    @include('groups.form')
@endsection