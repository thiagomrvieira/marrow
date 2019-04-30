<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Disponibilidade;

//use App\Auth;

class DisponibilidadeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispo = Disponibilidade::all();
        return view('disponibilidade', compact('dispo'));

    
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disponibilidadeNovo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dispo = new Disponibilidade();
        $dispo->usuario = auth()->user()->name;
        $dispo->tipoSangue = auth()->user()->tipo;
        $dispo->tipoDoacao = $request->input('tipoDoacao');
        $dispo->localDoacao = $request->input('localDoacao');
        $dispo->disponibilidade = $request->input('disponibilidade');
        $dispo->observacoes = $request->input('observacoes');
        $dispo->save();
        return redirect('agendamento');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dispo = Disponibilidade::find($id);
        if (isset($dispo)) {
            return view('disponibilidadeEditar', compact('dispo'));
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
        $dispo = Disponibilidade::find($id);
        if (isset($dispo)) {
            $dispo->tipoDoacao = $request->input('tipo');
            if(!empty('disponibilidade')){
                $dispo->disponibilidade = $request->input('disponibilidade');
            }
            $dispo->save();
            return redirect('disponibilidade');
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
        $dispo = Disponibilidade::find($id);
        if (isset($dispo)) {
            $dispo->delete();
            return redirect('disponibilidade');
            
        }
    }
}
