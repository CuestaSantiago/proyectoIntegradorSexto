<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $table='estudiante';
    protected $fillable=[
            'carrera',
            'identificacion',
            'nombre1',
            'nombre2',
            'apellido1',
            'apellido2',
            'correo_institucional',
            'telefono',
            'direccion'
    ];
    
    public function AsignacionEmpresa(){
        return $this->hasMany('App\asignarEmpresa');
    }
}
