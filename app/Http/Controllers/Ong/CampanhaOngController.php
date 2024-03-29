<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use App\Models\Campanha;
use App\Models\Ong;
use Illuminate\Http\Request;

class CampanhaOngController extends Controller
{

    
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $ongs = Ong::all();
        
        foreach ($ongs as $ong);
        return view('ong.criar-campanha', compact('ong'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ongs = Ong::all();
        
        foreach ($ongs as $ong)
        $campanha = Campanha::create([
        'nomeCampanha' => $request -> nomeCampanha, 
        'encerra_em' => $request ->encerra_em,
        'descricaoCampanha' => $request ->descricaoCampanha,
        'chavePix' => $request ->chavePix,
        'ong_id' => $ong ->id
        ]);

        return redirect()->route('campanha-ong', ['campanha' => $campanha->id]);
    }
  

    public function index(Campanha $campanha)
    {
        $ongs = Ong::all();
        
        foreach ($ongs as $ong);
        $campanhas = $campanha->all();
        return view('ong.listar-campanha', compact('campanhas', 'ong'));
    }
    
    public function show(Campanha $campanha)
    {
        $ong = Ong::findOrFail($campanha->ong_id);
        return view('ong.campanha-ong', ['campanha' => $campanha], compact('ong'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('ong.edit-campanha');
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
