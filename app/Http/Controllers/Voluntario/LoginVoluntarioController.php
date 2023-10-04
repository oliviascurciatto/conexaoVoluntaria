<?php

namespace App\Http\Controllers\Voluntario;

use App\Http\Controllers\Controller;
use App\Models\Voluntario;
use Illuminate\Http\Request;

class LoginVoluntarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('voluntario.login-voluntario');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voluntario.criar-cadastro-voluntario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email',
            'cpf' => 'required|string',
            'senha' => 'required|string',
            'image' => 'equired|max:10000|mimes:jpg, jpeg, png',
            'telefone_id' => 'required|integer',
            'genero_id' => 'required|integer',
            'endereco_id' => 'required|interger',
            'habilidade_id' => 'required|integer'
            
        ]);
    
        
        $voluntario = new Voluntario($validatedData);
    
        
        $voluntario->save();
    
        
        return redirect()->route('login-voluntario');
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
