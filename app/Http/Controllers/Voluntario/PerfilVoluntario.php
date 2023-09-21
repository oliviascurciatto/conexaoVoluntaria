<?php

namespace App\Http\Controllers\Voluntario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfilVoluntario extends Controller
{
    /**
     * Handle the incoming request.
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    
    
    public function __invoke(Request $request)
    {
        return view('voluntario.perfil-voluntario');
    }
}
