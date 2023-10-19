<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaOngController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ong.vaga-ong');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ong.criar-vaga');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nomeVaga' => 'required|string|max:80',
        //     'descricaoVaga' => 'required|text|max:255'
        // ]);
        
        
        Vaga::create([
        'nomeVaga' => $request -> nomeVaga,
        'quantidade' => $request ->quantidade, 
        'termina_em' => $request ->termina_em,
        'descricaoVaga' => $request ->descricaoVaga,
        'habilidade_id' => $request ->habilidades
        ]);
        
        $vaga = Vaga::all();

        return redirect()->route('vaga-ong', compact('vaga'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $vaga = Vaga::find($id);
        // return view('ong.vaga-ong', ['vaga'=>$vaga]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('ong.edit-vaga');
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
