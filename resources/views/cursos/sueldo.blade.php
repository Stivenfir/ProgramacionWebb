<?php
        
        $empleados = App\Models\Cursos::all();

        foreach ($empleados as $empleado) {
            $sueldoNuevo = $empleado->sueldo_basico * 1.1;
            $empleado->sueldo_basico = $sueldoNuevo;
            $empleado->save();
        }

        $empleados = App\Models\Cursos::orderBy('nombre', 'asc')->get();
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
            <th>Sueldo Basico</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($cursos as $cursos)
        <tr>
        <td>{{ $cursos->Nombre }}</td>
        <td>{{ $cursos->sueldo_basico }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<tr>

<h1>Sueldo Actualizado</h1>

<table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Sueldo Básico</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $empleado): ?>
            <tr>
                <td><?= $empleado->Nombre ?> </td>
                <td>$<?= $empleado->sueldo_basico ?> </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

 
          

</tr>
<a href="{{ url('cursos/') }}" class="btn btn-primary"> Regresar</a>
</div>
@endsection




