<?php

namespace App\Http\Controllers\Voluntario;

use App\Http\Controllers\Controller;
use App\Models\Vaga;
use App\Models\Voluntario;
use Illuminate\Http\Request;

class VagaVoluntarioController extends Controller
{
    
    
    public function store(Request $request)
    {
        //
    }

   
    public function show()
    {
        return view('voluntario.minhas-vagas');
    }

    

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
