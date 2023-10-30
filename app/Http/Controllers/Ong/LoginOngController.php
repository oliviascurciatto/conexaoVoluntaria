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

    public function loginOng(){
        //return view('ong.login-ong');
    }

    public function loginOngAuth(Request $request) //:RedirectResponse 
    {
        
        
        
        
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'senha' => ['required'],
        // ]);
 
        // if (Auth::guard('ong')->attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return view('ong.perfil-ong');
        // }
 
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }
    
}
