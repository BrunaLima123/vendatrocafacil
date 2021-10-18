<?php

namespace App\Http\Controllers;

use App\Historico;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historicos = historico::all();
        // chamando a tela e enviando o objeto $historicos
        // como parâmetro
        return view('historicos.index', compact('historicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function show(Historico $historico)
    {
        $login = login::findOrFail($id);
        // retornando a tela de visualização com o
        // objeto recuperado
        return view('logins.show',compact('login'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function edit(Historico $historico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historico $historico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historico $historico)
    {
        //
    }
}