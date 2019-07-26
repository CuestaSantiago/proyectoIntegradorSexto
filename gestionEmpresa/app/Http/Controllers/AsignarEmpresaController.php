<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\asignarEmpresa;
use App\estudiante;
use App\empresa;
use App\tutorGeneral;
use App\tutorEspecifico;
use App\tutorAcademico;


class AsignarEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = DB::table('asignar_empresas')
        ->join('empresa', 'asignar_empresas.empresa_id', '=','empresa.id')
        ->join('estudiante', 'asignar_empresas.estudiante_id', '=','estudiante.id')
        ->get();

        return $empresa;
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

        $data = $request->json()->all();
        $dataEstudiante = $data['estudiante'];
        $dataEmpresa = $data['empresa'];
        $dataTutorGeneral = $data['tutor_general'];
        $dataTutorEspecifico = $data['tutor_especifico'];
        $dataTutorAcademico = $data['tutor_academico'];
        $dataAsignarEmpresa = $data['asignar_empresa'];


        $asignarEmpresa = new asignarEmpresa(['estado' => $dataAsignarEmpresa['estado']]);
        $estudiante = estudiante::findorfail($dataEstudiante['id']);
        $empresa = empresa::findorfail($dataEmpresa['id']);
        $tutorGeneral = tutorGeneral::findorfail($dataTutorGeneral['id']);
        $tutorEspecifico = tutorEspecifico::findorfail($dataTutorEspecifico['id']);
        $tutorAcademico = tutorAcademico::findorfail($dataTutorAcademico['id']);

        $asignarEmpresa->estudiante()->associate($estudiante);
        $asignarEmpresa->empresa()->associate($empresa);
        $asignarEmpresa->tutorGeneral()->associate($tutorGeneral);
        $asignarEmpresa->tutorEspecifico()->associate($tutorEspecifico);
        $asignarEmpresa->tutorAcademico()->associate($tutorAcademico);

        $asignarEmpresa->save();
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
