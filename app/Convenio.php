<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
       //Definindo os atributos iniciais
       protected $fillable = ['nome_conv','fone_conv','site_conv', 'contato_conv', 'perccons_conv','percexame_conv'];

       public function consulta() {
        // especificar o tipo de associação
        return $this->hasMany(Consulta::class);
    }
}
