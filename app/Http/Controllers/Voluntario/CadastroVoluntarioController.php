<?php

namespace App\Http\Controllers\Voluntario;

use App\Http\Controllers\Controller;
use App\Models\Genero;
use App\Models\Voluntario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        
        
        Voluntario::create([
        'nome' => $request -> nome, 
        'cpf' => $request ->cpf,
        'email' => $request ->email,
        'password' => Hash::make($request->password),
        'imagem' => $request ->imagem,
        'sobre' => $request -> sobre,
        'telefone' => $request ->telefone,
        'cidade' => $request ->cidade,
        'estado' => $request ->estado,
        'genero_id' => $request ->genero,
        'habilidade_id' => $request ->habilidade
        ]);
                

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
