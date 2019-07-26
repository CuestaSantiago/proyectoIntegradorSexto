<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tutorAcademico;
class tutorAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tutorAcademico::all();
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
        $dataTutorAcademico = $dataClientBody['tutor_academico'];
        $tutorAcademico = TutorAcademico::create([
            'identificacion'=>$dataTutorAcademico['identificacion'],
            'apellido1'=>$dataTutorAcademico['apellido1'],
            'apellido2'=>$dataTutorAcademico['apellido2'],
            'nombre1'=>$dataTutorAcademico['nombre1'],
            'nombre2'=>$dataTutorAcademico['nombre2'],
            'correo'=>$dataTutorAcademico['correo'],
            'fecha_nacimiento'=>$dataTutorAcademico['fecha_nacimiento'],
            'direccion'=>$dataTutorAcademico['direccion'],
            'telefono'=>$dataTutorAcademico['telefono']
        ]);
        return response()->json($tutorAcademico);
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
