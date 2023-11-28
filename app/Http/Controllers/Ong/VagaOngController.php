<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use App\Models\Ong;
use App\Models\Vaga;
use App\Models\VagaVoluntario;
use App\Models\Voluntario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VagaOngController extends Controller
{
    
    public function create()
    {
        $ongs = Ong::all();
        
        foreach ($ongs as $ong);
        return view('ong.criar-vaga', compact('ong'));
    }
    
    public function store(Request $request)
    {
        
        $ongs = Ong::all();
        
        foreach ($ongs as $ong);
        $vaga = Vaga::create([
        'nomeVaga' => $request -> nomeVaga,
        'quantidade' => $request ->quantidade, 
        'encerra_em' => $request ->encerra_em,
        'descricaoVaga' => $request ->descricaoVaga,
        'habilidade_id' => $request ->habilidades,
        'ong_id' => $ong->id
        ]);
        
        return redirect()->route('vaga-ong.show', ['vaga' => $vaga->id]);
    }
    
    public function index(Vaga $vaga)
    {
        $vagas = $vaga->all();
        return view('ong.listar-vagas', compact('vagas'));
    }

    public function show(Vaga $vaga, Voluntario $voluntario)
    {
        
        $voluntarioId = DB::table('vaga_voluntario')
         ->where('vaga_id', $vaga->id)
         ->value('voluntario_id');

         if ($voluntarioId) {
        
         $voluntarioId = $voluntarioId;
         } else {
            $voluntarioId = null;}

         
         $ong = Ong::findOrFail($vaga->ong_id);

        return view('ong.vaga-ong', ['vaga' => $vaga], compact('ong', 'voluntarioId'));
         
       
    }
    // $ong = Ong::findOrFail($vaga->ong_id);
    // return view('ong.vaga-ong', ['vaga' => $vaga], compact('ong'));
    
    
    public function edit(Vaga $vaga)
    {
        $ong = Ong::findOrFail($vaga->ong_id);
        $vagas = Vaga::findOrFail($vaga->id);
        return view('ong.edit-vaga', ['vaga'=>$vaga->id], compact('ong', 'vagas'));
    }

   
    public function update(Request $request, Vaga $vaga)
    {
        $vaga = Vaga::findOrFail($vaga->id);
        $vaga->update([
        'nomeVaga' => $request->nomeVaga,
        'quantidade' => $request->quantidade,
        'encerra_em' => $request->encerra_em,
        'descricaoVaga' => $request->descricaoVaga,
        'habilidade_id' => $request->habilidades,
        ]);

        return redirect()->route('vaga-ong.show', ['vaga' => $vaga->id]);
    }

}
