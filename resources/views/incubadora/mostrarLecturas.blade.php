@extends('layout')
@section ('menu')

    <li>
        <a href="{{route('mostrarLecturas')}}">Mostrar lecturas</a>
    </li>

@endsection
@section('content')
    <h1>Lecturas de la incubadora:</h1>
    <br><br>

    <div id="lecturas">
    </div>


    <script src="/js/jquery.js"></script>
    <script>
        $( document ).ready(function() {
            refresh();
            function refresh() {
                var html = ""
                $.get( "http://192.34.78.106/getLectures", function( data ) {
                    html = html+"<table class= 'table table-hover table-condensed table-responsive'><thead><th class= 'text-center'>Fecha</th><th class= 'text-center'>Temperatura (°C)</th><th class= 'text-center'>% Humedad</th></thead><tbody>"
                    $(data).each(function (lectura, dat) {
                        html = html + "<tr class= 'text-center'><td>"+dat.created_at+"</td><td>"+dat.temperatura+"</td>"+"<td>"+dat.humedad+"</td></tr>"
                    })
                    html = html+"</tbody></table>"
                    $( "#lecturas" ).html( html );
                    setTimeout(function(){refresh();}, 1000);
                });
            }
        });
    </script>

@endsection