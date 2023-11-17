<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use App\Models\Ong;
use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaOngController extends Controller
{
    
    public function create()
    {
        return view('ong.criar-vaga');
    }

    
    public function store(Request $request)
    {
        
        $ongs = Ong::all();
        
        foreach ($ongs as $ong);
        Vaga::create([
        'nomeVaga' => $request -> nomeVaga,
        'quantidade' => $request ->quantidade, 
        'encerra_em' => $request ->encerra_em,
        'descricaoVaga' => $request ->descricaoVaga,
        'habilidade_id' => $request ->habilidades,
        'ong_id' => $ong->id
        ]);
        
        return redirect()->route('vaga-ong.index');
    }

   
    public function index(Vaga $vaga)
    {
        $vagas = $vaga->all();

        return view('ong.vaga-ong', compact('vagas'));
    }

    
    public function edit()
    {
        return view('ong.edit-vaga');
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
