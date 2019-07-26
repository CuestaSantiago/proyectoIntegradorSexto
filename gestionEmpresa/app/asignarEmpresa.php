<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asignarEmpresa extends Model
{
    protected $table='asignar_empresas';
    protected $fillable=[
            'estado'
    ];

    public function estudiante(){
        return $this->belongsTo('App\estudiante');
    }

    public function empresa(){
        return $this->belongsTo('App\empresa');
    }

    public function tutorGeneral(){
        return $this->belongsTo('App\tutorGeneral');
    }

    public function tutorAcademico(){
        return $this->belongsTo('App\tutorAcademico');
    }

    public function tutorEspecifico(){
        return $this->belongsTo('App\tutorEspecifico');
    }
}
