@extends('layouts.voluntario-layout')
@section('title', 'Campanha')

@section('content')
<div class="bg-white items-center my-0 flex flex-col 2xl:flex-row space-y- 2xl:space-y-0 2xl:space-x-4">
    <div class="w-8/12 flex flex-col 2xl:w-1/3 bg-white">
        <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
                    @foreach ($campanhas as $campanha)
                        
                   
                    <h4 class="mt-0 mb-6 text-xl text-gray-700 underline font-bold text-center">{{$campanha->nomeCampanha}}</h4>
                        
                            <h4 class="text-xl text-gray-700 font-bold">Informações</h4>
                            <ul class="mt-2 text-gray-700">
                                <li class="flex border-b py-2">
                                    <span class="font-bold w-25">Fim:</span>
                                    <span class="text-gray-700">{{$campanha->encerra_em}}</span>
                                </li>
                            </ul>
                            <h4 class="mt-8 text-xl text-gray-700 font-bold">Descrição</h4>   
                    <p class="mt-2 text-gray-700">{{$campanha->descricaoCampanha}}
                    </p>
                    <div x-data="{ modelOpen: false }">
                        <button @click="modelOpen =!modelOpen" class="mt-4 inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-green-500 hover:bg-orange-500 focus:ring-4">
                            
                    
                            <span>Contribuir</span>
                        </button>
                    
                        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0" 
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100" 
                                    x-transition:leave-end="opacity-0"
                                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                ></div>
                    
                                <div x-cloak x-show="modelOpen" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                                >
                                    <div class="flex items-center justify-between space-x-4">
                                        <h1 class="text-center text-xl text-gray-700 font-bold">Faça uma doação</h1>
                    
                                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>
                    
                                    <p class="mt-2 text-sm text-gray-500 ">
                                        Contribua com a nossa campanha enviando uma doação para o nosso endereço ou doando um valor no pix!
                                    </p>
                                    <div class="flex flex-col w-full 2xl:w-2/3">
                                        <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                                            <h4 class="text-center text-xl text-gray-700 font-bold">Chave-pix:</h4>
                                            <p class="text-center mt-2 text-gray-700">{{$campanha->chavePix}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    @endforeach       
                </div>
            </div>
        </div>
</div>
@endsection