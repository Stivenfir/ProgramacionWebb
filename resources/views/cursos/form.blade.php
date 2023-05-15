
<h1>{{$modo}} Dato</h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
<ul>
        @foreach( $errors -> all() as $error)
        <li> {{$error}} </li>
        @endforeach
</ul>
</div>


@endif

<div class="form-group">
<label for="documento"> Introduce el documento </label>
<input  type="text" class="form-control" value="{{isset($cursos -> documento)?$cursos -> documento:old('documento')}}" name="documento" id="documento"> 
</div>

<div class="form-group">
<label for="Nombre"> Introduce el nombre Completo </label>
<input  type="text" class="form-control" value="{{isset($cursos -> Nombre)?$cursos -> Nombre:old('Nombre')}}" name="Nombre" id="Nombre"> 
</div>

<div class="form-group">
<label for="sexo"> Introduce el sexo correspondiente </label>
<select name="sexo" id="sexo" class="form-control" value="{{isset($cursos -> sexo)?$cursos -> sexo:old('sexo')}}" name="sexo" id="sexo">
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
</div>

<div class="form-group">
<label for="domicilio"> Introduce el domicilio </label>
<input  type="text" class="form-control" value="{{isset($cursos -> domicilio)?$cursos -> Nombre:old('domicilio')}}" name="domicilio" id="domicilio"> 
</div>

<div class="form-group">
<label for="Fecha_Ingreso"> Introduce la fecha  de ingreso </label>
<input  type="date" class="form-control" value="{{isset($cursos ->Fecha_Ingreso)?$cursos ->Fecha_Ingreso:old('Fecha_Ingreso')}}"  name="Fecha_Ingreso" id="Fecha_Ingreso"> 
</div>

<div class="form-group">
<label for="Fecha_Nacimiento"> Introduce la fecha de nacimiento </label>
<input  type="date" class="form-control" value="{{isset($cursos -> Fecha_Nacimiento)?$cursos -> Fecha_final:old('Fecha_Nacimiento')}}" name="Fecha_Nacimiento" id="Fecha_Nacimiento" > 
</div>

<div class="form-group">
        <label for="sueldo_basico">Sueldo básico</label>
        <input type="number" name="sueldo_basico" id="sueldo_basico" class="form-control" value="{{isset($cursos -> sueldo_basico)?$cursos -> sexo:old('sueldo_basico')}}" name="sueldo_basico" id="sueldo_basico">
    </div>

    <br>
    <br>

<input  type="submit" class="btn btn-success" value="{{$modo }} datos"> 

<a href="{{ url('cursos/') }}" class="btn btn-primary"> Regresar</a>

<br>
