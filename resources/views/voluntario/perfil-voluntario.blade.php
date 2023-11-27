@extends('layouts.voluntario-layout')

@section('title', 'Perfil Voluntário')

@section('content')
        <div class="bg-white items-start my-6 flex flex-col 2xl:flex-row space-y-8 2xl:space-y-0 2xl:space-x-8">
            
            <div class="w-full flex flex-col 2xl:w-1/3">
                
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <div class="flex items-center gap-x-6">
                        <img class="h-29 w-29 rounded-lg items-start"
                            
                            alt="">
                    </div>
                    <h4 class="text-xl text-gray-700 font-bold">Dados Pessoais</h4>
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">Nome:</span>
                            <span class="text-gray-700">{{$voluntario->nome}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Celular:</span>
                            <span class="text-gray-700">{{$voluntario->telefone}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">E-mail:</span>
                            <span class="text-gray-700"></span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Endereço:</span>
                            <span class="text-gray-700">Cidade:{{$voluntario->cidade}}</span>
                            <span class="text-gray-700">Estado:{{$voluntario->estado}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Habilidades:</span>
                            <span class="text-gray-700">{{$voluntario->habilidade_id}}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col w-full 2xl:w-2/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-700 font-bold">Sobre</h4>
                    <p class="mt-2 text-gray-700">{{$voluntario->sobre}}</p>
                </div>
            </div>
        </div>
@endsection
