<?php

namespace App\Http\Controllers;

use App\Models\TipoUser;
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
