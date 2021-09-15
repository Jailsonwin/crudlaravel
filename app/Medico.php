<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
        'nome',
        'crm'
    ];

    //Função para estabelecer a associação ou relacionamento entre a classe Medico e Consulta
    Public function consulta(){
        //Especcificar o tipo de associação
        return $this->hasMany(Consulta::Class);
        }
}
