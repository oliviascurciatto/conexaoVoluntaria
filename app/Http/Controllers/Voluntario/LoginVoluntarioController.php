<?php

namespace App\Http\Controllers\Voluntario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginVoluntarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voluntario.login-voluntario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function authVoluntario(Request $request)
    {
        
        $credentials = $request->only(
            'email',
            'password');
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/criar-perfil-voluntario');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function destroy(){

        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login-voluntario');
    }
}
