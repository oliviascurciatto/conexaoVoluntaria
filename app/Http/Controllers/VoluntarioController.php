<?php

namespace App\Http\Controllers;

use App\Models\Voluntario;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VoluntarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('perfis/perfil-voluntario');
        //return view('perfis/edit-perfil-voluntario');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Voluntario $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voluntario $voluntario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voluntario $voluntario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voluntario $voluntario)
    {
        //
    }
}
