<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //Definindo os atributos iniciais
    protected $fillable = ['nome','genero'];

    //Função para estabelecer a associação ou relacionamento entre a classe Paciente e Consulta
    Public function consulta(){
        //Especcificar o tipo de associação
        return $this->hasMany(Consulta::Class);
        }
}
