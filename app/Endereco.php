<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
        
    }
}
