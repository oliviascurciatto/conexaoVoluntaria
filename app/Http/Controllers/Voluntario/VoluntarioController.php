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
    
    public function home()
    {
        return view('voluntario.home-voluntario');
    }

    
    public function verOng(Ong $ong, Voluntario $voluntario)
    {
        $vagas = Vaga::where('ong_id', $ong->id)->get();
        $campanhas = Campanha::where('ong_id', $ong->id)->get();

        $ong = Ong::findOrFail($ong->id);
        return view('voluntario.ong-voluntario', ['voluntario'=>$voluntario, 'vagas'=>$vagas, 'campanhas'=>$campanhas], compact('ong'));
    }
    
    public function verCampanha(Campanha $campanha)
    {
        $campanhas = $campanha->all();
        return view('voluntario.campanha-voluntario', compact('campanhas'));
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
    public function listarCampanha(Campanha $campanha)  {

        $campanhas = $campanha->all();
        return view('voluntario.listar-campanha', compact('campanhas'));
    }

   
}
