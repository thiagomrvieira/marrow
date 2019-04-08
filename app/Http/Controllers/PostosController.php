<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posto;

class PostosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postos = Posto::all();
        return view('postos', compact('postos'));

    
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postoNovo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posto = new posto();
        $posto->nome = $request->input('nome');
        $posto->endereco = $request->input('endereco');
        $posto->telefone = $request->input('telefone');
        $posto->save();
        return redirect('postos');

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
        $posto = Posto::find($id);
        if (isset($posto)) {
            return view('postoEditar', compact('posto'));
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
        $posto = Posto::find($id);
        if (isset($posto)) {
            $posto->nome = $request->input('nome');
            $posto->endereco = $request->input('endereco');
            $posto->telefone = $request->input('telefone');
            $posto->save();
            return redirect('postos');
            
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
        $posto = Posto::find($id);
        if (isset($posto)) {
            $posto->delete();
            return redirect('postos');
            
        }
    }
}
