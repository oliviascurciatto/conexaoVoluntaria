<?php

namespace App\Http\Controllers\Ong;

use App\Http\Controllers\Controller;
use App\Models\Ong;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class CadastroOngController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create()
    {
        return view('ong.criar-cadastro-ong');
    }

    
    public function store(Request $request)
    {
        
        Ong::create([
        'nomeOng' => $request -> nomeOng, 
        'email' => $request ->email,
        'cnpj' => $request ->cnpj,
        'senha' => Hash::make($request->senha),
        'image' => $request ->image,
        'sobre' => $request ->sobre,
        'telefone' => $request ->telefone,
        'rua' => $request ->rua,
        'numero' => $request ->numero,
        'complemento' => $request ->complemento,
        'bairro' => $request ->bairro,
        'cidade' => $request ->cidade,
        'estado' => $request ->estado,
        'causa_id' => $request ->causa,
        ]);
        


        return redirect()->route('login-ong');
    }

    public function loginOng(){
        return view('ong.login-ong');
    }

    public function loginOngAuth(Request $request): RedirectResponse{
        
        {
            $field = filter_var($request->get('identifier'), FILTER_VALIDATE_EMAIL) ? 'email' : 'cnpj';
     
            if (Auth::attempt([$field => $request->get('identifier'), 'senha' => $request->get('senha')])) {
                
                return redirect()->route('edit-perfil-ong');
            }
     
            
            return redirect()->route('login-ong');
        }
    }
    
   
    public function edit(string $id)
    {
        
    }

    
    public function update(Request $request, string $id)
    {
        
    }

    
    public function destroy(string $id)
    {
        
    }
}
