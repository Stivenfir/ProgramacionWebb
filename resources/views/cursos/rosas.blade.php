
<?php
        // Obtener los cursos que cumplen años en mayo
        $cursosMayo = App\Models\Cursos::whereMonth('Fecha_Nacimiento', '=', 5)->get();

        // Inicializar contadores
        $rosas = 0;
        $corbatas = 0;

        // Contar los cursos de sexo femenino y masculino
        foreach ($cursosMayo as $cursos) {
            if ($cursos->sexo == 'F') {
                $rosas++;
            } elseif ($cursos->sexo == 'M') {
                $corbatas++;
            }
        }
    ?>

@extends('layouts.app')
@section('content')
<div class="container">


@if(Session::has('mensaje'))

<div class="alert alert-success alert-dismissible " role="alert">
{{Session::get('mensaje')}}
</div>
@endif



<br/>
<br/>
<br/>
<table class="table">
<thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>sexo</th>
            <th>Fecha Nacimiento</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($cursosMayo as $cursos)
        <tr>
        <td>{{ $cursos->Nombre }}</td>
        <td>{{ $cursos->sexo }}</td>
        <td>{{ $cursos->Fecha_Nacimiento }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br/>
<h1>Regalos para el mes de mayo</h1>

<p>Se deben comprar <strong>{{ $rosas }}</strong> ramos de rosas y <strong>{{ $corbatas }}</strong> corbatas para el mes de mayo.</p>

<tr>

</tr>
<a href="{{ url('cursos/') }}" class="btn btn-primary"> Regresar</a>
</div>
@endsection

