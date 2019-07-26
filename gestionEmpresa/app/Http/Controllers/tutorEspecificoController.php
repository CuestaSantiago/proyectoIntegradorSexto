<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tutorEspecifico;

class tutorEspecificoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tutorEspecifico::all();
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
        $dataTutorEspecifico = $dataClientBody['tutor_especifico'];
        $tutorEspecifico = TutorEspecifico::create([
            'identificacion'=>$dataTutorEspecifico['identificacion'],
            'apellido1'=>$dataTutorEspecifico['apellido1'],
            'apellido2'=>$dataTutorEspecifico['apellido2'],
            'nombre1'=>$dataTutorEspecifico['nombre1'],
            'nombre2'=>$dataTutorEspecifico['nombre2'],
            'correo'=>$dataTutorEspecifico['correo'],
            'fecha_nacimiento'=>$dataTutorEspecifico['fecha_nacimiento'],
            'direccion'=>$dataTutorEspecifico['direccion'],
            'telefono'=>$dataTutorEspecifico['telefono']
        ]);
        return response()->json($tutorEspecifico);
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
