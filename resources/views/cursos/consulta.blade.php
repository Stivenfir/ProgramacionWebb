<?php
$coursesByGender = App\Models\Cursos::select('sexo', DB::raw('count(*) as total'))
    ->groupBy('sexo')
    ->get();
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
<table class="table">
<thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>sexo</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($cursos as $cursos)
        <tr>
        <td>{{ $cursos->Nombre }}</td>
        <td>{{ $cursos->sexo }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<tr>
@if ($coursesByGender !== null)
        <ul>
            @foreach($coursesByGender as $curso)
                <li>Sexo: {{ $curso->sexo }}, Total: {{ $curso->total }}</li>
            @endforeach
        </ul>
    @else
        <p>No se encontraron resultados.</p>
    @endif
 
          

</tr>
<a href="{{ url('cursos/') }}" class="btn btn-primary"> Regresar</a>
</div>
@endsection

