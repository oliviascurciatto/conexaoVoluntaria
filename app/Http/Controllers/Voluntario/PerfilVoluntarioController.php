<?php

namespace App\Http\Controllers\Voluntario;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Voluntario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerfilVoluntarioController extends Controller
{
    
    public function index()
    {
        
    }

   
    public function create()
    {
        return view('voluntario.criar-perfil-voluntario');
    }

    
    public function store(Request $request)
    {
        
        $users = User::all();
    
        foreach ($users as $user);
        $voluntario = Voluntario::create([
        'nome' => $request -> nome, 
        'cpf' => $request ->cpf,
        'imagem' => $request ->imagem,
        'sobre' => $request -> sobre,
        'telefone' => $request ->telefone,
        'cidade' => $request ->cidade,
        'estado' => $request ->estado,
        'genero_id' => $request ->genero,
        'habilidade_id' => $request ->habilidade,
        'user_id'=> $user->id
        ]);
                

        return redirect()->route('perfil-voluntario.show', ['voluntario'=> $voluntario->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Voluntario $voluntario)
    {
        return view('voluntario.perfil-voluntario', ['voluntario'=>$voluntario->id]);
    }

    
    public function edit()
    {
        return view('voluntario.edit-perfil-voluntario');
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
}
