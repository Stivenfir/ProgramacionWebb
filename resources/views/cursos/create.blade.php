@extends('layouts.app')
@section('content')
<div class="container">

<form method="post" action="{{ url ('/cursos')}}">
@csrf 
@include('cursos.form',['modo'=>'Crear'])

    
</form>
</div>
@endsection