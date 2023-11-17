<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use App\Models\Campanha;
use App\Models\Ong;
use App\Models\User;
use App\Models\Vaga;
use Illuminate\Http\Request;

class PerfilOngController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Ong $ong, Vaga $vaga, Campanha $campanha)
    {
        $ongs = $ong->all();
        $vagas = $vaga->all();
        $campanhas = $campanha->all();
        return view('ong.perfil-ong', compact('ongs', 'vagas', 'campanhas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ong.criar-perfil-ong');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = User::all();
    
        foreach ($users as $user);
        Ong::create([
        'nomeOng' => $request -> nomeOng, 
        'cnpj' => $request ->cnpj,
        'image' => $request ->image,
        'sobre' => $request ->sobre,
        'telefone' => $request ->telefone,
        'rua' => $request ->rua,
        'numero' => $request ->numero,
        'complemento' => $request ->complemento,
        'bairro' => $request ->bairro,
        'cidade' => $request ->cidade,
        'estado' => $request ->estado,
        'causa_id' => $request ->causa,
        'user_id' => $user->id
        ]);
        
       

        return redirect()->route('login-ong');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('ong.edit-perfil-ong');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        
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
