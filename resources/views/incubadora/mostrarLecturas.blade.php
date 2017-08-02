@extends('layout')
@section ('menu')

    <li>
        <a href="{{route('mostrarLecturas')}}">Mostrar lecturas</a>
    </li>

@endsection
@section('content')
    <h1>Lecturas de la incubadora:</h1>
    <br><br>
    @foreach($lecturas as $lectura)
        {{$lectura->humedad}}
    @endforeach

@endsection