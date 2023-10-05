<?php

namespace App\Http\Controllers\Voluntario;

use App\Http\Controllers\Controller;
use App\Models\Voluntario;
use Illuminate\Http\Request;

class CadastroVoluntarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('voluntario.criar-cadastro-voluntario');
    }

 
    public function store(Request $request)
    {
        // $request->validate([
        //     'nome' => 'required|string|max:255',
        //     'email' => 'required|email|unique:voluntarios,email',
        //     'cpf' => 'required|string|max:14|unique:voluntarios,cpf',
        //     'senha' => 'required|string|min:8|confirmed',
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        //     'telefone_id' => 'nullable|required|integer',
        //     'genero_id' => 'nullable|required|integer',
        //     'endereco_id' => 'nullable|required|integer',
        //     'habilidade_id' => 'nullable|required|integer',
        // ]);
        
        
        Voluntario::create([
        'nome' => $request -> nome, 
        'email' => $request ->email,
        'cpf' => $request ->cpf,
        'senha' => $request ->senha,
        'image' => $request ->image,
        'telefone_id' => $request ->telefone,
        'genero_id' => $request ->genero,
        'endereco_id' => $request ->estado,
        'descricaoVoluntario' => $request -> sobre,
        'habilidade_id' => $request ->habilidades]);
        


        return redirect()->route('login-voluntario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
       /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
}
