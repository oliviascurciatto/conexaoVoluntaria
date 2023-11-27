@extends('layouts.voluntario-layout')

@section('title', 'Perfil Ong')

@section('content')



    

<div class="items-center my-6 flex flex-col 2xl:flex-row space-y-8 2xl:space-y-0 2xl:space-x-8 bg-white">
    <div class="w-full flex flex-col 2xl:w-1/3">
        <div class="flex-1 bg-white  p-8 items-center">
            <h4 class="mt-8 text-xl text-gray-900 font-bold">{{$ong->nomeOng}}</h4> 
        </div>
        
    </div>
    <div class="w-full flex flex-col 2xl:w-1/3">
        <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
            
            <h4 class="mt-8 text-xl text-gray-900 font-bold">Sobre Nós</h4>
            <p class="mt-2 text-gray-700">{{$ong->sobre}}</p>
                </div>

            </div>
            
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Informações</h4>
                    <ul class="mt-2 text-gray-700">
                        
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Telefone:</span>
                            <span class="text-gray-700">{{$ong->telefone}}</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">E-mail:</span>
                            <span class="text-gray-700"></span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Endereço:</span>
                            <span class="text-gray-700">Rua: {{$ong->rua}} &nbsp;</span>
                            <span class="text-gray-700">Número: {{$ong->numero}} &nbsp;</span>
                            <span class="text-gray-700">Complemento: {{$ong->complemento}} &nbsp;</span>
                            <span class="text-gray-700">Bairro: {{$ong->bairro}} &nbsp;</span>
                            <span class="text-gray-700">Cidade: {{$ong->cidade}} &nbsp;</span>
                            <span class="text-gray-700">Estado: {{$ong->estado}} &nbsp;</span>
                        </li>
                    </ul>
                    
                    
                </div>
            </div>
            
            
            
            
            <div class="mt-4 w-full flex flex-col 2xl:w-1/3 ">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-700 font-bold">Vagas</h4>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach ($vagas as $vaga)
                    <div class="mt-2 max-w-sm rounded-lg shadow-2xl  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-100 dark:hover:bg-gray-300">
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-700">
                                    {{$vaga->nomeVaga}}</h5>
                            </a>
                            <a href="{{ route('vaga-ong.show', ['vaga' => $vaga->id]) }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-orange-500 dark:hover:bg-green-500 dark:focus:ring-green-500">
                                Ver vaga
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            
            
                </div>
            
            </div>
            

        <div class="w-full flex flex-col 2xl:w-1/3">
            <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                <h4 class="text-xl text-gray-700 font-bold">Campanhas</h4>
                
                  
                    @foreach ($campanhas as $campanha)
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        
                        <a href="{{ route('campanha-voluntario', ['campanha'=>$campanha->id]) }}"
                            class="mt-2 flex flex-col items-center bg-white border-separate rounded-lg shadow-2xl md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-100 dark:hover:bg-gray-300">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-700">
                                    {{$campanha->nomeCampanha}}</h5>
                                    
                                </div>
                            </a> 
                        </div>
                        
                        @endforeach
                        
                        
                    </div>
                </div>
            </div>    
    </div>
   

    @endsection
