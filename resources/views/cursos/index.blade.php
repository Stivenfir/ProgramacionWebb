
@extends('layouts.app')
@section('content')
<div class="container">


@if(Session::has('mensaje'))

<div class="alert alert-success alert-dismissible " role="alert">
{{Session::get('mensaje')}}
</div>
@endif


<a href="{{ url('cursos/create') }}" class="btn btn-success"> Registrar nuevo dato</a>
<a href="{{ url('consulta') }}" class="btn btn-primary">Consulta de Empleados por Sexo</a>
<a href="{{ url('rosas') }}" class="btn btn-primary">Consulta de Cumpleaños</a>
<a href="{{ url('sueldo') }}" class="btn btn-primary">Consultar aumento de salario</a>
<a href="{{ url('nomina') }}" class="btn btn-primary">Consultar Nomina</a>
<br/>
<br/>
<table class="table">
<thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Documento</th>
            <th>Nombre</th>
            <th>sexo</th>
            <th>domicilio</th>
            <th>Fecha_Ingreso</th>
            <th>Fecha_Nacimiento</th>
            <th>Sueldo</th>
            <th>opciones</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($cursos as $cursos)
        <tr>
            <td>{{$cursos -> id}}</td>
            <td>{{$cursos -> documento}}</td>
            <td>{{$cursos -> Nombre}}</td>
            <td>{{$cursos -> sexo}}</td>
            <td>{{$cursos -> domicilio}}</td>
            <td>{{$cursos -> Fecha_Ingreso}}</td>
            <td>{{$cursos -> Fecha_Nacimiento}}</td>
            <td>{{$cursos -> sueldo_basico}}</td>
            <td> 
                
            <a href="{{url ('/cursos/'.$cursos->id.'/edit')}}" class="btn btn-warning">
                    Editar 
                </a> 
                
            <form action="{{url('/cursos/'.$cursos->id)}}" class="d-inline" method="post">
            @csrf
            {{method_field ('DELETE')}}
            <input type="submit" onclick="return confirm ('¿ Deseas Eliminar ?')" value="Borrar" class="btn btn-danger">

</form>
        
        </td>
            
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection



