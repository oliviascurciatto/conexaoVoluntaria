<?php

namespace App\Http\Controllers\Voluntario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    
    public function home()
    {
        return view('voluntario.home-voluntario');
    }

    
    public function verOng()
    {
        return view('voluntario.ong-voluntario');
    }
    
    public function verCampanha()
    {
        return view('voluntario.campanha-voluntario');
    }

   
}
