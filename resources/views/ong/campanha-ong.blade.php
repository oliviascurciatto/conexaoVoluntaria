@extends('layouts.ong-layout')
@section('title', 'Campanha')

@section('content')

<div class="bg-white items-center my-0 flex flex-col 2xl:flex-row space-y- 2xl:space-y-0 2xl:space-x-4">
    <div class="w-8/12 flex flex-col 2xl:w-1/3 bg-white">
        <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8 items-center">
                    <h4 class="mt-0 mb-6 text-xl text-gray-700 underline font-bold text-center">{{$campanha->nomeCampanha}}</h4>
                    
                    <h4 class="text-xl text-gray-700 font-bold">Informações</h4>
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-b py-2">
                            <span class="font-bold w-25">Termina em:</span>
                            <span class="text-gray-700">{{$campanha->encerra_em}}</span>
                        </li>
                    </ul>
                    <h4 class="mt-8 text-xl text-gray-700 font-bold">Descrição</h4>   
                    <p class="mt-2 text-gray-700">{{$campanha->descricaoCampanha}}
                    </p>
                    
                            
 
                    <div class="mt-5 ml-0 mr-0 border-b border-gray-900/10 pb-12">
                        <a href="{{ route('edit-campanha', ['id'=>1]) }}" id="editar"
                            class="inline-flex justify-center hover:text-gray-700 items-center py-3 px-5 text-base font-medium text-center text-gray-700 rounded-lg border border-orange-500 hover:bg-orange-500 focus:ring-4 focus:ring-orange-500"
                            name="editar">Editar</a>
                        </div>    
                    </div>
                </div>
            </div>
</div>

@endsection