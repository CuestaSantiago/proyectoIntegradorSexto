<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $table='empresa';
    protected $fillable=[
            'carrera',
            'nombre_empresa',
            'nombre_representante',
            'correo_empresarial',
            'direccion',
            'telefono',
            'telefono_opcional',
            'fecha_inicio_contrato',
            'fecha_fin_contrato',
            'compensacion'
    ];

    public function AsignacionEmpresa(){
        return $this->hasMany('App\asignarEmpresa');
    }

}
