<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoexame extends Model
{
  //Definindo os atributos iniciais
  protected $fillable = ['nome_tpex','sigla_tpex','desc_tpex'];
  
}
