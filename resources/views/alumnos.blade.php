@extends('layout')

@section('paginaPrincipal')
    Pagina de Alumnos
@endsection

@section('contenidoPrincipal')
<h3>lista de Alumnos de ingenieria en programacion</h3>

@foreach ($students as $student)
    <h2>{{$student['name']}}</h2>
@endforeach
@endsection