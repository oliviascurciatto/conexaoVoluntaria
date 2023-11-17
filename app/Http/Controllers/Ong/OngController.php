<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use App\Models\Campanha;
use App\Models\Ong;
use App\Models\Vaga;
use App\Models\Voluntario;
use Illuminate\Http\Request;

class OngController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home-ong');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function listarCampanha(Campanha $campanha)
    {
        $campanhas = $campanha->all();
        return view('ong.listar-campanha', compact('campanhas'));
    }
    public function listarVaga(Vaga $vaga)
    {
        $vagas = $vaga->all();
        return view('ong.listar-vagas', compact('vagas'));
    }

    public function listarVoluntarios(Voluntario $voluntario)
    {
        $voluntarios = $voluntario->all();
        return view('ong.listar-voluntario', compact('voluntarios'));
    }

    public function listarOngs(Ong $ong)
    {
        $ongs = $ong->all();
        return view('ong.listar-voluntario', compact('ongs'));
    }

}
