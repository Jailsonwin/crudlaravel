<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
   //Definindo os atributos iniciais
   protected $fillable = ['nome_cargo', 'desc_cargo'];
}
