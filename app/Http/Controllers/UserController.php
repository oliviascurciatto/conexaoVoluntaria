<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        return view('criar-login');
    }

    public function store(Request $request)
    {
        User::create([
            'email' => $request -> email,
            'password' => $request -> password,
            'tipo_user_id' => $request -> tipoUser,
        ]);

        return redirect()->route('login-ong');
    }

    public function auth(Request $request)
    {
        
        $credentials = $request->only(
            'email',
            'password');
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/criar-perfil-ong');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function show(string $id)
    {
        //
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
