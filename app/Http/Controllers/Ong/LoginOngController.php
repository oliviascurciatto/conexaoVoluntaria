<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ong;

class LoginOngController extends Controller
{
    
    public function index()
    {
        
    }

    public function loginOng(){
        return view('ong.login-ong');
    }

    

    public function loginOngAuth(Request $request) //:RedirectResponse 
    {
        
        // $credentials = $request->only([
        //     'email',
        //     'password',
        // ]);
 
        // if (Auth::guard('ong')->attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('/perfil-ong');
        // }
 
        // return back()->withErrors([
        //     'email' => 'E-mail inválido!',
        // ])->onlyInput('E-mail');
    
    }


}