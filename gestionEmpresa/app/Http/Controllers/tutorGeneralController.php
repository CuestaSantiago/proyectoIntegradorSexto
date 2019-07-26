<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tutorGeneral;

class tutorGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tutorGeneral::all();
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
        $dataTutorGeneral = $dataClientBody['tutor_general'];
        // $dataEstudiante=$dataClientBody['estudiante'];
        $tutores = TutorGeneral::create([
            'nombre1' => $dataTutorGeneral['nombre1'],
            'nombre2' => $dataTutorGeneral['nombre2'],
            'apellido1' => $dataTutorGeneral['apellido1'],
            'apellido2' => $dataTutorGeneral['apellido2'],
            'identificacion' => $dataTutorGeneral['identificacion'],
            'correo' => $dataTutorGeneral['correo'],
            'fecha_nacimiento' => $dataTutorGeneral['fecha_nacimiento'],
            'direccion' => $dataTutorGeneral['direccion'],
            'telefono' => $dataTutorGeneral['telefono']
        ]);


        //esto es para enviar todo
        //$response=TutorGeneral::create($dataTutorGeneral);
        return response()->json($tutores);
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
