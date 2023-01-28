@extends('layout')

@section('paginaPrincipal')
    Pagina de maestros
@endsection

@section('contenidoPrincipal')
<h3>lista de maestros de ingenieria en programacion</h3>

@foreach ($masters as $master)
    <h2>{{$master['name']}}</h2>
@endforeach
@endsection