<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
    public function agendamento(){
        return $this->hasMany('App\Agendamento');
    }
    public function endereco(){
        return $this->belongsTo('App\Endereco');
    }
}
