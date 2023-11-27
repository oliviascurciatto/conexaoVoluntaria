@extends('layouts.voluntario-layout')
@section('title', 'Vaga')

@section('content')
<form action="{{ route('vaga-voluntario.add', ['vaga'=>$vaga->id]) }}">
<div class="items-center my-0 flex flex-col 2xl:flex-row space-y- 2xl:space-y-0 2xl:space-x-4 bg-white">
    <div class="w-8/12 flex flex-col 2xl:w-1/3">
        <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
                   
                    <h4 class="mt-0 mb-6 text-xl text-gray-700 underline font-bold text-center">{{$vaga ->nomeVaga}}</h4>
                        
                            <h4 class="text-xl text-gray-700 font-bold">Informações</h4>
                            <ul class="mt-2 text-gray-700">
        
                                <li class="flex border-b py-2">
                                    <span class="font-bold w-24">Quantidade:</span>
                                    <span class="text-gray-700">{{$vaga ->quantidade}}</span>
                                </li>
                                <li class="flex border-b py-2">
                                    <span class="font-bold w-25">Inscrições até:</span>
                                    <span class="text-gray-700">{{$vaga ->encerra_em}}</span>
                                </li>
                                <li class="flex border-b py-2">
                                    <span class="font-bold w-25">Habilidades:</span>
                                    <span class="text-gray-700">{{$vaga ->habilidades}}</span>
                                </li>
                            </ul>
                            <h4 class="mt-8 text-xl text-gray-700 font-bold">Descrição</h4>   
                    <p class="mt-2 text-gray-700">{{$vaga ->descricaoVaga}}</p>

                        <button type="submit"
                        class="mt-8 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-orange-500 dark:hover:bg-green-500 dark:focus:ring-green-500">
                        Candidatar-se
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                        </button>
                    
                </div>
            </div>
        </div>
</div>
</form>
@endsection