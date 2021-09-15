<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    
    protected $fillable = [
        'paciente_id',
        'medico_id',
        'data',
        'hora'
    ];


    Public function medico(){
        //Especcificar o tipo de associação
        return $this->belongsTo(Paciente::Class);
        }

    Public function paciente(){
        //Especcificar o tipo de associação
        return $this->belongsTo(Paciente::Class);
        }

};
