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

    public function __construct()
        {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:ongs')->except('logout');
            
        }

    public function loginOngAuth(Request $request) :RedirectResponse 
    {
        
        $credentials = $request->only([
            'cnpj' => ['required', 'cnpj'],
            'senha' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('perfil-ong');
        }
 
        return back()->withErrors([
            'cnpj' => 'The provided credentials do not match our records.',
        ])->onlyInput('cnpj');
    
}
}