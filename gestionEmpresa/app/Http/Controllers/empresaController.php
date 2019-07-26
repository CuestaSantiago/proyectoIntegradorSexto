<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empresa;
class empresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return empresa::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return empresa::All();
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
        $dataEmpresa = $dataClientBody['empresa'];
        $empresas = Empresa::create([
            'carrera' => $dataEmpresa['carrera'],
            'nombre_empresa' => $dataEmpresa['nombre_empresa'],
            'nombre_representante' => $dataEmpresa['nombre_representante'],
            'correo_empresarial' => $dataEmpresa['correo_empresarial'],
            'direccion' => $dataEmpresa['direccion'],
            'telefono' => $dataEmpresa['telefono'],
            'telefono_opcional' => $dataEmpresa['telefono_opcional'],
            'fecha_inicio_contrato' => $dataEmpresa['fecha_inicio_contrato'],
            'fecha_fin_contrato' => $dataEmpresa['fecha_fin_contrato'],
            'compensacion' => $dataEmpresa['compensacion']
        ]);

        return response()->json($empresas);
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
