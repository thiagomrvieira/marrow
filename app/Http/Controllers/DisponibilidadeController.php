<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Agendamento;

//use App\Auth;

class AgendamentoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispo = Agendamento::all();
        return view('agendamento', compact('dispo'));
        

         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agendamentoNovo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dispo = new Agendamento();
        $dispo->usuario = auth()->user()->name." ".auth()->user()->sobrenome;
        $dispo->tipoSangue = auth()->user()->tipoSangue;
        $dispo->tipoDoacao = $request->input('tipoDoacao');
        $dispo->localDoacao = $request->input('localDoacao');
        $dispo->agendamento = $request->input('agendamento');
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
            return view('dagendamentoEditar', compact('dispo'));
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
            if(!empty('agendamento')){
                $dispo->agendamento = $request->input('agendamento');
            }
            $dispo->save();
            return redirect('agendamento');
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
        $dispo = Agendamento::find($id);
        if (isset($dispo)) {
            $dispo->delete();
            return redirect('agendamento');
            
        }
    }
}
