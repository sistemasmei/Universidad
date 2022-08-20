<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiantes::all()->toArray();
        return array_reverse($estudiantes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  
        $estudiante = new Estudiantes([
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'tipo_identificacion' => $request->input('tipo_identificacion'),
            'numero_identificacion' => $request->input('numero_identificacion'),
            'sexo' => $request->input('sexo'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'carrera' => $request->input('carrera')
        ]);

        $estudiante->save();
        return response()->json("Estudiante creado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante = Estudiantes::find($id);
        return response()->json($estudiante);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        $estudiante = Estudiantes::find($id);
        $estudiante->update($request->all());
        return response()->json("El estudiante se actualizo correctamente.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiantes::find($id);
        $estudiante->delete();
        return response()->json("El estudiante se borro correctamente");
    }
}
