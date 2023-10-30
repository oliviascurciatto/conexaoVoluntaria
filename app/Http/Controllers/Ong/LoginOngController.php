<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginOngController extends Controller
{
    
    public function index()
    {
        
    }

    // public function authenticate(Request $request): RedirectResponse
    // {
    //     $ong = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);
 
    //     if (Auth::($ong)) {
    //         $request->session()->regenerate();
 
    //         return redirect()->route('perfil-ong');
    //     }
 
    //     return back()->withErrors([
    //         'email' => 'E-mail inválido!',
    //     ])->onlyInput('email');
    // }
   
    
}
