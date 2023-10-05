<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use App\Models\Ong;
use Illuminate\Http\Request;

class CadastroOngController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ong.criar-cadastro-ong');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:ongs,email',
            'cnpj' => 'required|string|max:18|unique:ongs,cnpj',
            'senha' => 'required|string|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'telefone_id' => 'nullable|required|integer',
            'causa_id' => 'nullable|required|integer',
            'endereco_id' => 'nullable|required|integer'
        ]);
        
        
        Ong::create([
        'nome' => $request -> nome, 
        'email' => $request ->email,
        'cnpj' => $request ->cnpj,
        'senha' => $request ->senha,
        'image' => $request ->image,
        'telefone_id' => $request ->telefone,
        'causa_id' => $request ->genero,
        'endereco_id' => $request ->estado,
        'descricaoOng' => $request -> sobre
        ]);
        


        return redirect()->route('login-ong');
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
    public function edit(string $id)
    {
        //
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
