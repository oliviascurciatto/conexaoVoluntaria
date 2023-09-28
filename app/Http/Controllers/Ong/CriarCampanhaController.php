<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use App\Models\Campanha;
use Illuminate\Http\Request;

class CriarCampanhaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $campanha = new Campanha();

        // $campanha->nomeCampanha = $request->input('nomeCampanha');
        // $campanha->criada_em = $request->input('criada_em');
        // $campanha->descricaoCampanha = $request->input('descricaoCampanha');
        // $campanha->causa_id = $request->input('causa_id');

        // $campanha->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
