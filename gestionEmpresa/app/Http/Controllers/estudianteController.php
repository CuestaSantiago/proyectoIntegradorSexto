<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiante;

class estudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return estudiante::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataClientBody = $request->json()->all();
        $dataEstudiante = $dataClientBody['estudiante'];
        $estudiantes = Estudiante::create([
            'carrera' => $dataEstudiante['carrera'],
            'nombre1' => $dataEstudiante['nombre1'],
            'nombre2' => $dataEstudiante['nombre2'],
            'apellido1' => $dataEstudiante['apellido1'],
            'apellido2' => $dataEstudiante['apellido2'],
            'identificacion' => $dataEstudiante['identificacion'],
            'correo_institucional' => $dataEstudiante['correo_institucional'],
            'telefono' => $dataEstudiante['telefono'],
            'direccion' => $dataEstudiante['direccion']
        ]);

        return response()->json($estudiantes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
