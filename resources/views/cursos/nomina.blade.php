<body>

    <?php


        $nominaPorSexo = App\Models\Cursos::select('sexo', DB::raw('SUM(sueldo_basico) as total_nomina'))
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
<br/>
<table class="table">
<thead class="table-dark">
        <tr>
            <th>Nombre</th>
            <th>sexo</th>
            <th>Sueldo Basico</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($cursos as $cursos)
        <tr>
        <td>{{ $cursos->Nombre }}</td>
        <td>{{ $cursos->sexo }}</td>
        <td>{{ $cursos->sueldo_basico }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br/>
<h1>Total de Nomina por sexo</h1>

<table>
        <tbody>
            <?php foreach ($nominaPorSexo as $fila): ?>
            <tr>
                <td>Sexo :  <?= $fila->sexo ?></td>
                <td>Nomina :  $<?= $fila->total_nomina ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



<tr>

</tr>
<a href="{{ url('cursos/') }}" class="btn btn-primary"> Regresar</a>
</div>
@endsection


