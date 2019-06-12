<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Instrucao;

class InstrucoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instrucoes = Instrucao::all();
        return view('instrucoes', compact('instrucoes'));
            
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instrucaoNovo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instrucao = new Instrucao();
        $instrucao->titulo = $request->input('titulo');
        $instrucao->instrucoes = $request->input('instrucao');
        $instrucao->save();
        return redirect('instrucoes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instrucoes = Instrucao::find($id);
        if (isset( $instrucoes)) {
            return view('instrucao', compact('instrucoes'));
        }
            
        
        

      


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instrucao = Instrucao::find($id);
        if (isset($instrucao)) {
            return view('instrucaoEditar', compact('instrucao'));
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $instrucao = Instrucao::find($id);
        if (isset($instrucao)) {
            $instrucao->titulo = $request->input('titulo');
            $instrucao->instrucoes = $request->input('instrucoes');
            $instrucao->save();
            return redirect('instrucoes');
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instrucao = Instrucao::find($id);
        if (isset($instrucao)) {
            $instrucao->delete();
            return redirect('instrucoes');
            
        }
    }
}
