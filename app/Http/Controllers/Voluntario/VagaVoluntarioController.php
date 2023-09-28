<?php

namespace App\Http\Controllers\Voluntario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VagaVoluntarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('voluntario.vaga-voluntario');
    }

    
 
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('voluntario.minhas-vagas');
    }
    public function listar()
    {
        return view('voluntario.listar-vagas');
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
