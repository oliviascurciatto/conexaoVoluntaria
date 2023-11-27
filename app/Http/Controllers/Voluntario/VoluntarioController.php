<?php

namespace App\Http\Controllers\Voluntario;

use App\Http\Controllers\Controller;
use App\Models\Campanha;
use App\Models\Ong;
use App\Models\Vaga;
use App\Models\Voluntario;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    
    public function home(Voluntario $voluntario)
    {
        return view('voluntario.home-voluntario', ['voluntario'=>$voluntario]);
    }

    
    public function verOng(Voluntario $voluntario, Ong $ong)
    {
        
        $ong = Ong::findOrFail($ong->id);
        $voluntario = Voluntario::findOrFail(3);
        $vagas = Vaga::where('ong_id', $ong->id)->get();
        $campanhas = Campanha::where('ong_id', $ong->id)->get();
        return view('voluntario.ong-voluntario', ['voluntario'=>$voluntario, 'ong'=>$ong], compact( 'vagas', 'campanhas'));
    }

    public function verVaga(Voluntario $voluntario, Vaga $vaga)
    {
        
        $vaga = Vaga::findOrFail($vaga->id);
        $voluntario = Voluntario::findOrFail(3);
        return view('voluntario.vaga-voluntario', ['voluntario'=>$voluntario, 'vaga'=>$vaga], compact('vaga'));
    }

    
    
    public function verCampanha(Campanha $campanha, Voluntario $voluntario)
    {
        $campanha = Campanha::findOrFail($campanha->id);
        $voluntario = Voluntario::findOrFail(3);
        return view('voluntario.campanha-voluntario', ['voluntario'=>$voluntario, 'campanha'=>$campanha], compact('campanha'));
    }

    public function listarOng(Ong $ong, Voluntario $voluntario)  {

        $voluntario = Voluntario::findOrFail($voluntario->id);
        $ongs = $ong->all();
        return view('voluntario.listar-ong', ['voluntario'=>$voluntario] ,compact('ongs'));
    }
    public function listarVaga(Vaga $vaga, Voluntario $voluntario)  {
        $voluntario = Voluntario::findOrFail($voluntario->id);
        $vagas = $vaga->all();
        return view('voluntario.listar-vagas', ['voluntario'=>$voluntario], compact('vagas'));
    }
    public function listarCampanha(Campanha $campanha, Voluntario $voluntario)  {
        $voluntario = Voluntario::findOrFail($voluntario->id);
        $campanhas = $campanha->all();
        return view('voluntario.listar-campanha', ['voluntario'=>$voluntario], compact('campanhas'));
    }

    public function addVoluntario(Request $request, Vaga $vaga){
        $vaga = Vaga::find(1);
        $voluntario = Voluntario::find(2);
        $vaga->voluntarios()->attach($voluntario);
    }
   
}
