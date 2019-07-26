<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tutorGeneral extends Model
{
    protected $table='tutor_general';
    protected $fillable=[
            'identificacion',
            'apellido1',
            'apellido2',
            'nombre1',
            'nombre2',
            'correo',
            'fecha_nacimiento',
            'direccion',
            'telefono'
    ];

    public function AsignacionEmpresa(){
        return $this->hasMany('App\asignarEmpresa');
    }
}
