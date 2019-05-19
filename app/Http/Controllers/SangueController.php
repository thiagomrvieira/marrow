<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sangue;

class SangueController extends Controller
{
    public function retornaSangue(){
        $sangue = Sangue::all();
        return $sangue;
    }
}
