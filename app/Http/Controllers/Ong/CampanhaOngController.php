<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use App\Models\Campanha;
use App\Models\Ong;
use Illuminate\Http\Request;

class CampanhaOngController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ong.campanha-ong');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('ong.criar-campanha');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campanhas = Ong::all();
        
        foreach ($campanhas as $campanha)
        Campanha::create([
        'nomeCampanha' => $request -> nomeCampanha, 
        'encerra_em' => $request ->encerra_em,
        'descricaoCampanha' => $request ->descricaoCampanha,
        'chavePix' => $request ->chavePix,
        'ong_id' => $campanha ->id
        ]);
        


        return redirect()->route('campanha-ong');
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
