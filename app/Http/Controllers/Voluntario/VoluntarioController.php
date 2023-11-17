<?php

namespace App\Http\Controllers\Voluntario;

use App\Http\Controllers\Controller;
use App\Models\Campanha;
use App\Models\Ong;
use App\Models\Vaga;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    
    public function home()
    {
        return view('voluntario.home-voluntario');
    }

    
    public function verOng()
    {
        return view('voluntario.ong-voluntario');
    }
    
    public function verCampanha(Campanha $campanha)
    {
        $campanhas = $campanha->all();
        return view('voluntario.campanha-voluntario', compact('campanhas'));
    }

    public function listarOng(Ong $ong)  {

        $ongs = $ong->all();
        return view('voluntario.listar-ong', compact('ongs'));
    }
    public function listarVaga(Vaga $vaga)  {

        $vagas = $vaga->all();
        return view('voluntario.listar-vaga', compact('vagas'));
    }
    public function listarCampanha(Campanha $campanha)  {

        $campanhas = $campanha->all();
        return view('voluntario.listar-campanha', compact('campanhas'));
    }

   
}
