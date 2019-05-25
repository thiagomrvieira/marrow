<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    public function posto(){
        return $this->belongsTo('App\Posto');
    }
}
