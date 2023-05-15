<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 


class CursosController extends Controller
{

    public function consulta()
{
    $dato['cursos'] = Cursos::paginate(10);
    return view('cursos.consulta',$dato);
}

public function rosas()
{
    $dato['cursos'] = Cursos::paginate(10);
    return view('cursos.rosas',$dato);
}

public function nomina()
{
    $dato['cursos'] = Cursos::paginate(10);
    return view('cursos.nomina',$dato);
}

public function salario()
{
    $dato['cursos'] = Cursos::paginate(10);
    return view('cursos.sueldo',$dato);
}

    public function index()
    {
        
        $dato['cursos'] = Cursos::paginate(10);
        return view('cursos.index',$dato);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.create');
    }



    public function store(Request $request)
    {
        $campos=[
            'documento' => 'required|max:20',
            'Nombre'=>'required|string|max:100',
            'sexo' => 'required|in:F,M',
            'domicilio' => 'required|max:200',
            'Fecha_Ingreso'=>'required|date',
            'Fecha_Nacimiento'=>'required|date',
            'sueldo_basico' => 'required|numeric'
        ];

        $mensaje=[

            'required'=>'El dato :attribute es requerido'

        ];

        $this -> validate($request,$campos,$mensaje);

        $datosCurso = request()->except('_token');
        Cursos::insert($datosCurso);
        return redirect('cursos')->with('mensaje','Se agrego Correctamente');
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Cursos $cursos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $cursos = Cursos::findOrFail($id);
        return view('cursos.edit', compact('cursos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

        $campos=[
            'documento' => 'required|max:20',
            'Nombre'=>'required|string|max:100',
            'sexo' => 'required|in:F,M',
            'domicilio' => 'required|max:200',
            'Fecha_Ingreso'=>'required|date',
            'Fecha_Nacimiento'=>'required|date',
            'sueldo_basico' => 'required|numeric'
        ];

        $mensaje=[

            'required'=>'El dato :attribute es requerido'

        ];

        $this -> validate($request,$campos,$mensaje);
        
        $datosCurso = request()->except(['_token','_method']);
        Cursos::where('id','=',$id)-> update($datosCurso);
        $cursos = Cursos::findOrFail($id);
        return redirect ('cursos')->with('mensaje','Se actualizaron Correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Cursos::destroy($id);
        return redirect ('cursos')->with('mensaje','Se borro Correctamente');
    }





}
