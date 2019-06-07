<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;

class EnderecoController extends Controller
{
    public function store(Request $request){
        $end = new Endereco();
        $end->rua = $request->input('rua');
        $end->bairro = $request->input('bairro');
        $end->numero = $request->input('numero');
        $end->pais = $request->input('pais');
        $end->uf = $request->input('uf');
        $end->cidade = $request->input('cidade');
        $end->cep = $request->input('cep');
        $end->complemento = $request->input('complemento');
        $end->save();
        return json_encode($end);
    }
}
